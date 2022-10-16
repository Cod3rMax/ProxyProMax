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
        $ProxyProtocol  = $request->get('ProxyProtocol');
        $Cod3rMax = new Cod3rMaxChecker();


        if($ProxyProtocol == "HTTPS"){
            return response()->json(["ProxyID"=>$ProxyID,"Protocol" => $ProxyProtocol, "Response"=>$Cod3rMax->HTTPS($ProxyIP), "ProxyDetails"=> $Cod3rMax->GetProxyDetails($ProxyIP)],200);
        }
        else if($ProxyProtocol == "HTTP"){
            return response()->json(["ProxyID"=>$ProxyID,"Protocol" => $ProxyProtocol, "Response"=>$Cod3rMax->HTTP($ProxyIP), "ProxyDetails"=> $Cod3rMax->GetProxyDetails($ProxyIP)],200);
        }
        else if($ProxyProtocol == "SOCKS5"){
            return response()->json(["ProxyID"=>$ProxyID,"Protocol" => $ProxyProtocol, "Response"=>$Cod3rMax->SOCKS5($ProxyIP), "ProxyDetails"=> $Cod3rMax->GetProxyDetails($ProxyIP)],200);
        }
        else if($ProxyProtocol == "SOCKS4"){
            return response()->json(["ProxyID"=>$ProxyID,"Protocol" => $ProxyProtocol, "Response"=>$Cod3rMax->SOCKS4($ProxyIP), "ProxyDetails"=> $Cod3rMax->GetProxyDetails($ProxyIP)],200);
        }
        else {
            return response()->json(["ProxyID"=>$ProxyID,"Protocol" => $ProxyProtocol, "Response"=>$Cod3rMax->SOCKS4A($ProxyIP), "ProxyDetails"=> $Cod3rMax->GetProxyDetails($ProxyIP)],200);
        }



    }




}
