<?php

namespace App\Http\Controllers;

use App\Models\ServerStatus;
use Illuminate\Http\Request;

class ServerStatusController extends Controller
{
    public function index(){
        $ServerStatus                = ServerStatus::all();
        $ServerActiveOperations      = ServerStatus::where('is_active','=',1)->count();
        $ServerStoppedOperations     = ServerStatus::where('is_active','=',0)->count();
        $ServerMaintenanceOperations = ServerStatus::where('is_active','=',2)->count();
        return view('ServerStatus', compact(['ServerStatus','ServerActiveOperations','ServerStoppedOperations','ServerMaintenanceOperations']));
    }
}
