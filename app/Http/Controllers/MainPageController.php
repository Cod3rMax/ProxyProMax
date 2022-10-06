<?php

namespace App\Http\Controllers;

use App\Models\Proxies;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index(){
        $Proxies = Proxies::all();
        return view('index', compact('Proxies'));
    }
}
