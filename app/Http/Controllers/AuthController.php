<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Models\User;
use App\Models\UserEmailConfirmation;
use App\Models\UserRole;

class AuthController extends Controller
{



    public function index(){
        return view('Auth.Registration');
    }


    public function login(){
        return view('Auth.Login');
    }


    public function UserLogin(LoginRequest $request){

        if(Auth::attempt($request->all())){
           return response()->json(['You have been logged in!',Auth::user()->UserConfirmation->confirmed], 200);
        }
        return response()->json(['message'=>'Email or Password incorrect!'], 401);

    }


    public function UserRegistration(RegistrationRequest $request){





            if(empty($request->get('invitation_code'))){

                 // Create a new user registration
                 $user = User::create($request->merge(
                    [
                        'password'=>bcrypt($request->get('password')),
                        'password_confirmation'=>bcrypt($request->get('password_confirmation')),
                    ]
                    )->toArray());

                //Generate user verification code and store it
                UserEmailConfirmation::create([
                    'user_id' => $user->id,
                    'confirmation_code' => md5(bcrypt(openssl_random_pseudo_bytes(500).md5(bcrypt(md5(openssl_random_pseudo_bytes(500))))))
                ]);

                // Create user role Default(Subscriber)
                UserRole::create([
                    'user_id' => $user->id,
                    'role' => 'Subscriber'
                ]);

                // Login the new user automatically
                Auth::login($user);

                // Send message to the user that he is registered
                return response()->json(['You have been registered!'], 200);
            }


            //Here what to do when the invitation code is not empty

            else if(!empty($request->get('invitation_code'))){

            }


            return response()->json(['message' => 'Can not register the user'], 422);

    }




}
