<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('Auth.Registration');
    }


    public function login(){
        return view('Auth.Login');
    }



}
