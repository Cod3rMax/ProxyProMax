<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeUserPasswordRequest;

class UserChangePasswordController extends Controller
{


    public function index(){
        return view('Auth.ChangePassword');
    }


    public function ChangePassword(ChangeUserPasswordRequest $request){
        return response()->json($request->all(), 200);
    }

}
