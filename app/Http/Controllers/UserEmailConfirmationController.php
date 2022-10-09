<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserEmailConfirmation;

class UserEmailConfirmationController extends Controller
{
    public function index(){
        return view('Auth.UserConfirmation');
    }


    public function confirm(Request $request){

        $user = Auth::user();
        $code = $user->UserConfirmation->confirmation_code;

        // check if the user logged in its his confirmation code
        if(trim($request->get('confirmation_code')) == $code)
        {
            //confirm his account
            UserEmailConfirmation::where('user_id','=',$user->id)->update([
                'confirmed' => 1
            ]);

            //return response to him that it is confirmed
            return response()->json(['Account confirmed!'], 200);
        }

        //return response that the account is not confirmed.
        return response()->json(['message' => 'Confirmation code incorrect!'], 422);
    }

}
