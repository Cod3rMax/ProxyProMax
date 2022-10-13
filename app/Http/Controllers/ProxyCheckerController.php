<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProxyCheckerController extends Controller
{
    public function index(){
        return view('ProxyChecker');
    }
}
