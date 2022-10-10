<?php

namespace App\Http\Controllers;

use App\Models\Proxies;
use Illuminate\Http\Request;

class ProxiesController extends Controller
{
    public function index(){
        return view('ProxyList.AllProxies');
    }


    public function GetAllProxies(){
        return response()->json(Proxies::all(),200);
    }


}
