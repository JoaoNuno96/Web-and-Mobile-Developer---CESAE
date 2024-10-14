<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,"Welcome"])->name("welcome");

Route::get('/home', [HomeController::class,"Index"])->name("home");

Route::get('/allUsers', function () {
    return view('users.all_user');
})->name("users.all");

Route::get('/addUsers', function () {
    return view('users.addUsers');
})->name("users.add");

Route::get('/error', function () {
    return view('fallback.erro');
})->name("page.erro");

Route::get('/welcome/{name}', function ($name) {
    return "<h1>Hello $name </h1>";
});


//Rota Fallback!!!
Route::fallback(function(){
    return view('fallback.erro');
});

