<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContactSupportController extends Controller
{
    public function index(){
        return view('UserSupport.ContactUs');
    }
}
