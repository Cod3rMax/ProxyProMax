<?php

namespace App\Http\Controllers;

use Codermax\Proxymaxchecker\Cod3rMaxChecker;
use Illuminate\Http\Request;

class ProxyCheckerController extends Controller
{
    public function index(){
        return view('ProxyChecker');
    }



    public function CheckProxy(Request $request){
        $ProxyIP  = $request->get('ProxyIP');
        $ProxyID  = $request->get('ProxyID');
        $Cod3rMax = new Cod3rMaxChecker();
        return response()->json(["ProxyID"=>$ProxyID,"Response"=>$Cod3rMax->HTTPS($ProxyIP)],200);
    }




}
