<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProxiesController;
use App\Http\Controllers\ProxyCheckerController;
use App\Http\Controllers\UserChangePasswordController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('Subscribe', [\App\Http\Controllers\NewsLetterController::class, 'store'])->name('NewsLetterSubscribe');


Route::middleware('AuthenticatedUsersMiddleware')->group(function () {

    Route::post('Auth/Login', [\App\Http\Controllers\AuthController::class, 'UserLogin'])->name('UserLoginAPI');
    Route::post('Auth/Registration', [\App\Http\Controllers\AuthController::class, 'UserRegistration'])->name('UserRegistrationAPI');

});

//User must be logged in to access this route!
Route::middleware('auth:sanctum')->group(function(){
    Route::post('Auth/ChangePassword',[UserChangePasswordController::class,'ChangePassword'])->name('ChangeUserPasswordAPI');
});

Route::middleware('UsersConfirmationMiddleware')->post('Auth/UserConfirmation', [\App\Http\Controllers\UserEmailConfirmationController::class, 'confirm'])->name('UserConfirmationAPI');



// Proxy List pages api

Route::post('ProxyChecker', [ProxyCheckerController::class,'CheckProxy'])->name('ProxyCheckerAPI');
Route::get('ProxyList/AllProxies',[ProxiesController::class,'GetAllProxies'])->name('AllProxiesAPI');
Route::get('ProxyList/UkProxies',[ProxiesController::class,'GetUkProxies'])->name('UkProxiesAPI');
Route::get('ProxyList/UkProxies',[ProxiesController::class,'GetUsaProxies'])->name('UsaProxiesAPI');
