<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,"Welcome"])->name("welcome");

Route::get('/home', [HomeController::class,"Index"])->name("home");
Route::get('/home/welcome/{name}', [HomeController::class,"WelcomeUser"])->name("home/welcome/{name}");

Route::get('/allUsers', [UserController::class,"allUsers"])->name("users.all");
Route::get('/addUsers', [UserController::class,"addUsers"])->name("users.add");

Route::get('/isertUser', [UserController::class,"addUsers"])->name("users.add");

Route::get('/allTask', [Task::class,"getAllTask"])->name("task.all");

//Rota Fallback!!!
Route::fallback(function(){
    return view('fallback.erro');
});

