<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserChangePasswordController extends Controller
{


    public function index(){
        return view('Auth.ChangePassword');
    }



}
