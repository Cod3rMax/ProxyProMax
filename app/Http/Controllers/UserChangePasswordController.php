<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ChangeUserPasswordRequest;
use App\Models\User;

class UserChangePasswordController extends Controller
{


    public function index()
    {
        return view('Auth.ChangePassword');
    }


    public function ChangePassword(ChangeUserPasswordRequest $request)
    {
        $userID = Auth::user()->id;

        if(password_verify($request->only('password')['password'], User::find($userID)->password)){

            User::findOrFail($userID)->update(["password"=>bcrypt($request->only('new_password')['new_password'])]);
            return response()->json(['Password has been changed!'], 200);

        }

        return response()->json(['message' => 'Current password incorrect!'], 422);



    }
}
