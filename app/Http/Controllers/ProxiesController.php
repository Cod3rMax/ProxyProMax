<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProxiesController extends Controller
{
    public function index(){
        return view('ProxyList.AllProxies');
    }
}
