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

    // Cookie::queue(Cookie::forget("signed"));
    // Cookie::queue(Cookie::forget("accountid"));

    return redirect("/");
});

Route::get("/design", function(){

    return view("design");
});

Route::get("/offline", function(){

    return view("offline");
});

Route::get("/", [App\Http\Controllers\ClientController::class, "welcome"]);
Route::get("/status", [App\Http\Controllers\ClientController::class, "status"]);
Route::get("/statuses", [App\Http\Controllers\ClientController::class, "statuses"]);
Route::get("/branches", [App\Http\Controllers\ClientController::class, "branches"]);
Route::get("/feeds", [App\Http\Controllers\ClientController::class, "feeds"]);
Route::get("/apply", [App\Http\Controllers\ClientController::class, "applyIndex"]);
Route::get("/home", [App\Http\Controllers\ClientController::class, "home"]);
Route::get("/meet", [App\Http\Controllers\ClientController::class, "meet"]);
Route::get("/docs", [App\Http\Controllers\ClientController::class, "docs"]);

Route::post("/apply", [App\Http\Controllers\ClientController::class, "apply"]);
Route::post("/meet", [App\Http\Controllers\ClientController::class, "schedule"]);
Route::post("/application/submit", [App\Http\Controllers\ClientController::class, "submit"]);
Route::post("/meet/cancel", [App\Http\Controllers\ClientController::class, "meetingCancel"]);
Route::post("/upload_docs", [App\Http\Controllers\ClientController::class, "uploadDocs"]);

Route::get("/account", [App\Http\Controllers\AccountController::class, "account"]);
Route::get("/sign_in", [App\Http\Controllers\AccountController::class, "signInIndex"]);
Route::get("/sign_up", [App\Http\Controllers\AccountController::class, "signUpIndex"]);

Route::post("/sign_in", [App\Http\Controllers\AccountController::class, "signIn"]);
Route::post("/sign_up", [App\Http\Controllers\AccountController::class, "signUp"]);
Route::post("/account/update", [App\Http\Controllers\AccountController::class, "update"]);
Route::post("/confirm_account", [App\Http\Controllers\AccountController::class, "confirmAccount"]);

