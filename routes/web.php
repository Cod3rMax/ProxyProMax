<?php

use App\Models\Proxies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserVerificationMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProxiesController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProxyCheckerController;
use App\Http\Controllers\ServerStatusController;
use App\Http\Controllers\UserChangePasswordController;
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


//Registration system routes with security middleware

Route::middleware('AuthenticatedUsersMiddleware')->group(function () {

    Route::get('Auth/Registration',[AuthController::class,'index'])->name('UserRegistration');
    Route::get('Auth/login',[AuthController::class,'login'])->name('UserLogin');

});


//User must be logged in to access this route!
Route::middleware('auth:sanctum')->group(function(){
    Route::get('Auth/ChangePassword',[UserChangePasswordController::class,'index'])->name('ChangeUserPassword');
    Route::get('User/UserInfo',[AuthController::class,'userinfoindex'])->name('UserInfi');
});


Route::middleware('UsersConfirmationMiddleware')->get('Auth/UserConfirmation',[UserEmailConfirmationController::class,'index'])->name('UserConfirmation');
Route::get('Auth/Logout', function(){ Auth::logout(); return redirect()->back(); })->name('UserLogout');






//Proxies routes to be displayed to the users
Route::get('ProxyChecker',[ProxyCheckerController::class,'index'])->name('ProxyChecker');
Route::get('AllProxies',[ProxiesController::class,'index'])->name('AllProxies');
Route::get('UkProxies',[ProxiesController::class,'ukindex'])->name('UKProxies');
Route::get('UsaProxies',[ProxiesController::class,'usaindex'])->name('UsaProxies');
Route::get('CleanProxies',[ProxiesController::class,'cleanindex'])->name('CleanProxies');
Route::get('ServerStatus',[ServerStatusController::class,'index'])->name('ServerStatus');












Route::get('PrivacyPolicy', function(){ return view('PrivacyPolicy'); })->name('PrivacyPolicy');
Route::get('Terms', function(){ return view('Terms'); })->name('Terms');












Route::get('testlogin', function(){
    if(Auth::check()){
        return "logged in";
    }
    return "not logged";
});

Route::get('testdb', function(){


    $object = [
        "data"=> [
            "data"=> [
                "Blacklisted"=>1,
                "Country"=>"Login required",
                "Protocol"=>"Login required",
                "ProxyIP"=>"Login required",
                "created_at"=>"3 weeks ago",
                "id"=>1,
                "updated_at"=>"3 weeks ago"],
                "data"=> [
                    "Blacklisted"=>1,
                    "Country"=>"Login required",
                    "Protocol"=>"Login required",
                    "ProxyIP"=>"Login required",
                    "created_at"=>"3 weeks ago",
                    "id"=>1,
                    "updated_at"=>"3 weeks ago"]
            ],
            ];

    return response()->json($object,200);
});

Route::get('dbdelete', function(){
\App\Models\User::truncate();
\App\Models\UserEmailConfirmation::truncate();
\App\Models\UserRole::truncate();
});


Route::get('testrelation', function(){

    if(Auth::check()){
        echo "User is logged in! with id: ".Auth::user()->id." <br>";
        echo "<br> Checking relationSHIP: <br>";

        return \App\Models\User::find(Auth::user()->id)->with('UserConfirmation')->get();


    }
    return "not logged";
});



Route::get('Mail', function(){
    $code = "212121";
    Mail::to("dzxxxw@gmail.com")->send(new NewUserVerificationMail($code));
    //return new NewUserVerificationMail();
});
