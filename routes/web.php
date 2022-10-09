<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\UserEmailConfirmationController;

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

Route::middleware('AuthenticatedUsersMiddleware')->group(function () {

    Route::get('Auth/Registration',[AuthController::class,'index'])->name('UserRegistration');
    Route::get('Auth/login',[AuthController::class,'login'])->name('UserLogin');

});
Route::middleware('UsersConfirmationMiddleware')->get('Auth/UserConfirmation',[UserEmailConfirmationController::class,'index'])->name('UserConfirmation');
Route::get('Auth/Logout', function(){ Auth::logout(); return redirect()->back(); })->name('UserLogout');


Route::get('PrivacyPolicy', function(){ return view('PrivacyPolicy'); })->name('PrivacyPolicy');
Route::get('Terms', function(){ return view('Terms'); })->name('Terms');

































Route::get('testlogin', function(){
    if(Auth::check()){
        return "logged in";
    }
    return "not logged";
});

Route::get('testlogout', function(){
Auth::logout();
});

Route::get('dbdelete', function(){
\App\Models\User::truncate();
\App\Models\UserEmailConfirmation::truncate();
});


Route::get('testrelation', function(){

    if(Auth::check()){
        echo "User is logged in! with id: ".Auth::user()->id." <br>";
        echo "<br> Checking relationSHIP: <br>";

        return \App\Models\User::find(Auth::user()->id)->with('UserConfirmation')->get();


    }
    return "not logged";
});
