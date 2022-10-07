<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{

    public function store(SubscribeRequest $request)
    {


        // check if email exists or not
        /*         if(Subscribe::where('email','=',$request->only(['email']))->first())
        {
            return response()->json(['Email can not be stored!'],422);
        } */

        if(!Subscribe::insert($request->merge(["IPAddress"=>$request->ip()])->toArray()))
        {
            return response()->json(['Email can not be stored!'],422);
        }
            return response()->json(['You have been subscribed successfully!'],200);


    }
}
