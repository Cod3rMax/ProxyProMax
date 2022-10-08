<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Models\User;
use App\Models\UserEmailConfirmation;

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
            return response()->json(['You have been logged in!'], 200);
        }
        return response()->json(['message'=>'Email or Password incorrect!'], 401);

    }


    public function UserRegistration(RegistrationRequest $request){


        $user = User::create($request->merge(
            [
                'password'=>bcrypt($request->get('password')),
                'password_confirmation'=>bcrypt($request->get('password_confirmation')),
            ]
            )->toArray());


            if($user){

                UserEmailConfirmation::create([
                    'user_id' => $user->id,
                    'confirmation_code' => md5(bcrypt(openssl_random_pseudo_bytes(500).md5(bcrypt(md5(openssl_random_pseudo_bytes(500))))))
                ]);


                Auth::login($user);
                return response()->json(['You have been registered!'], 200);
            }

            return response()->json(['message' => 'Can not register the user'], 422);

    }

}
