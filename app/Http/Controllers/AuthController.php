<?php

namespace App\Http\Controllers;

use App\Events\NewUserRegistredEvent;
use App\Models\User;
use App\Models\UserRole;
use App\Models\InvitationCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserVerificationMail;
use App\Models\UserEmailConfirmation;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;

class AuthController extends Controller
{



    public function index()
    {
        return view('Auth.Registration');
    }


    public function login()
    {
        return view('Auth.Login');
    }


    public function UserLogin(LoginRequest $request)
    {

        if (Auth::attempt($request->all())) {
            return response()->json(['You have been logged in!', Auth::user()->UserConfirmation->confirmed], 200);
        }
        return response()->json(['message' => 'Email or Password incorrect!'], 401);
    }


    public function UserRegistration(RegistrationRequest $request)
    {



        $code = md5(bcrypt(openssl_random_pseudo_bytes(500) . md5(bcrypt(md5(openssl_random_pseudo_bytes(500))))));
        $user = $request->merge(
            [
                'password' => bcrypt($request->get('password')),
                'password_confirmation' => bcrypt($request->get('password_confirmation'))
            ]
        )->toArray();


        // Here what to do when the invitation code is empty

        if (empty($request->get('invitation_code'))) {
            event(new NewUserRegistredEvent($user, $code, false));

            if (User::where('email', '=', $request->get('email'))->get()->count()) {

                return response()->json(["You have been registered!"], 200);
            }
        }


        // Here what to do when the invitation code is not empty

        else if (!empty($request->get('invitation_code'))) {

            // Here to get the invitation code details
            $InvitationCode = InvitationCode::where('invitation_code', '=', $request->get('invitation_code'));

            // Check if the invitation code exsits
            if ($InvitationCode->count() === 1) {

                // Check if the invitation code is used or no
                if (!$InvitationCode->first()->is_used) {


                    // Create a new user registration
                    $user = User::create($user);


                    //Generate user verification code and store it
                    UserEmailConfirmation::create([
                        'user_id' => $user->id,
                        'confirmation_code' => $code
                    ]);


                    // Create user role acording to the invitation code
                    UserRole::create([
                        'user_id' => $user->id,
                        'role' => $InvitationCode->first()->used_for
                    ]);


                    // Update the invitation code (used_by, is_used)
                    $InvitationCode->update([
                        'used_by' => $user->id,
                        'is_used' => true,
                    ]);


                    // Mail the verification code to the user

                    Mail::to($user->email)->send(new NewUserVerificationMail($code));


                    // Login the new user automatically
                    Auth::login($user);

                    // Send message to the user that he is registered
                    return response()->json(['You have been registered!'], 200);
                } else {


                    return response()->json(['message' => 'invitation code used!'], 422);
                }
            }


            return response()->json(['message' => 'Wrong invitation code!'], 422);
        }


        return response()->json(['message' => 'Can not register the user'], 422);
    }








    public function userinfoindex(){
         $user =  Auth::user()->with(['UserConfirmation','UserRole'])->get();
         return view('Auth.UserInfo', compact('user'));
    }


}
