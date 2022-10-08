<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[MainPageController::class,'index'])->name('MainPage');


Route::get('Auth/Registration',[AuthController::class,'index'])->name('UserRegistration');
Route::get('Auth/login',[AuthController::class,'login'])->name('UserLogin');



Route::get('PrivacyPolicy', function(){ return view('PrivacyPolicy'); })->name('PrivacyPolicy');
Route::get('Terms', function(){ return view('Terms'); })->name('Terms');


Route::get('testlogin', function(){
    if(Auth::check()){
        return "logged in";
    }
    return "not logged";
});
