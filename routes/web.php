<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get("/sign_out", function(){
    Session::flush();

    return redirect("sign_in");
});

Route::get("/design", function(){

    return view("design");
});

Route::get("/", [App\Http\Controllers\ClientController::class, "welcome"]);
Route::get("/status", [App\Http\Controllers\ClientController::class, "status"]);
Route::get("/feeds", [App\Http\Controllers\ClientController::class, "feeds"]);
Route::get("/apply", [App\Http\Controllers\ClientController::class, "applyIndex"]);
Route::get("/home", [App\Http\Controllers\ClientController::class, "home"]);
Route::get("/meet", [App\Http\Controllers\ClientController::class, "meet"]);
Route::get("/setup_account_picture", [App\Http\Controllers\ClientController::class, "setupAccountPicture"]);
Route::post("/apply", [App\Http\Controllers\ClientController::class, "apply"]);
Route::post("/meet", [App\Http\Controllers\ClientController::class, "schedule"]);
Route::post("/meet/cancel", [App\Http\Controllers\ClientController::class, "meetingCancel"]);

Route::get("/account", [App\Http\Controllers\AccountController::class, "account"]);
Route::get("/sign_in", [App\Http\Controllers\AccountController::class, "signInIndex"]);
Route::get("/sign_up", [App\Http\Controllers\AccountController::class, "signUpIndex"]);
Route::post("/sign_in", [App\Http\Controllers\AccountController::class, "signIn"]);
Route::post("/sign_up", [App\Http\Controllers\AccountController::class, "signUp"]);
Route::post("/account/update", [App\Http\Controllers\AccountController::class, "update"]);
Route::post("/account/picture/upload", [App\Http\Controllers\AccountController::class, "upload"]);
Route::post("/account/picture/remove", [App\Http\Controllers\AccountController::class, "remove"]);

