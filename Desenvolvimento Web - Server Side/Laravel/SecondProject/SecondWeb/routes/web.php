<?php

use App\Http\Controllers\ErrorPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JornalController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/",[HomeController::class,"Home"])->name("home");

Route::get("/welcome",[WelcomeController::class,"Welcome"])->name("welcome");

Route::get('/jornal',[JornalController::class,"Index"])->name("jornal");

Route::fallback([ErrorPageController::class,"Error"])->name("errorPage");
