<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{



    public function index(){
        return view('Auth.Registration');
    }


    public function login(){
        return view('Auth.Login');
    }


    public function UserLogin(LoginRequest $request){
        return response()->json($request->all(), 200);
    }



}
