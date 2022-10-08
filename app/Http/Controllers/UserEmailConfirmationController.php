<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserEmailConfirmationController extends Controller
{
    public function index(){
        return view('Auth.UserConfirmation');
    }
}
