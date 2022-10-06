<?php

namespace App\Http\Controllers;

use App\Models\Proxies;
use App\Models\SocialMediaLink;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index(){
        $Proxies = Proxies::limit(10)->get();
        $SocialMediaLinks = SocialMediaLink::all();

        return view('index', compact(['Proxies','SocialMediaLinks']));
    }
}
