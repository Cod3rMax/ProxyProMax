<?php

namespace App\Http\Controllers;

use App\Models\Proxies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProxiesController extends Controller
{
    public function index(){
        return view('ProxyList.AllProxies');
    }


    public function GetAllProxies(){

        $Proxies = Proxies::orderBy('id','desc')->paginate(10);

        if(!Auth::check() && $Proxies->currentPage() > 4){

            return response()->json([
                "data"=> [
                    "data"=> [
                        "Blacklisted"=>1,
                        "Country"=>"Login required",
                        "Protocol"=>"Login required",
                        "ProxyIP"=>"Login required",
                        "created_at"=>"3 weeks ago",
                        "id"=>1,
                        "updated_at"=>"3 weeks ago"]
                        ]
            ],200);

        }

    return response()->json($Proxies,200);
    }







    public function ukindex(){
        return view('ProxyList.UkProxies');
    }


    public function GetUkProxies(){
        $Proxies = Proxies::Where('Country','United Kingdom')->orderBy('id','desc')->paginate(10);

        if(!Auth::check() && $Proxies->currentPage() > 4){

            return response()->json([
                "data"=> [
                    "data"=> [
                        "Blacklisted"=>1,
                        "Country"=>"Login required",
                        "Protocol"=>"Login required",
                        "ProxyIP"=>"Login required",
                        "created_at"=>"3 weeks ago",
                        "id"=>1,
                        "updated_at"=>"3 weeks ago"]
                        ]
            ],200);

        }

    return response()->json($Proxies,200);
    }






    public function usaindex(){
        return view('ProxyList.UsaProxies');
    }

    public function GetUsaProxies(){
        $Proxies = Proxies::Where('Country','United States')->orderBy('id','desc')->paginate(10);

        if(!Auth::check() && $Proxies->currentPage() > 4){

            return response()->json([
                "data"=> [
                    "data"=> [
                        "Blacklisted"=>1,
                        "Country"=>"Login required",
                        "Protocol"=>"Login required",
                        "ProxyIP"=>"Login required",
                        "created_at"=>"3 weeks ago",
                        "id"=>1,
                        "updated_at"=>"3 weeks ago"]
                        ]
            ],200);

        }

    return response()->json($Proxies,200);
    }

}
