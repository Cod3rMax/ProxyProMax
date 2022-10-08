<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\RegistrationRequest;

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

        return response()->json($request->all(), 200);

    }

}
