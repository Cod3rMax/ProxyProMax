<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProxyCheckerController extends Controller
{
    public function index(){
        return view('ProxyChecker');
    }



    public function CheckProxy(Request $request){
        return response()->json($request->all(), 200);
    }




}
