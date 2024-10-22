<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,"index" ])->name("home");
Route::get('/welcome', [WelcomeController::class,"info" ])->name("welcome");
Route::get('/users',[UserController::class,"showList"])->name("user.showList");
Route::get('/user/add',[UserController::class,"add"])->name("user.add");
Route::post('/user/add/sucess',[UserController::class,"addNewUser"])->name("user.addNew"); //NOVO RETORNO
Route::get('/user/remove',[UserController::class,"remove"])->name("user.remove");
Route::get('/contact', [ContactsController::class,"contact" ])->name("contact");

