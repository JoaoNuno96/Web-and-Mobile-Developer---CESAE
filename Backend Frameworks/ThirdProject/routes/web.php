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
Route::get("/user/edit/{id}",[UserController::class,"editUser"])->name("user.editSpecs");
Route::post("/user/edit/",[UserController::class,"editUserShow"])->name("user.editNow");
Route::post('/user/add/sucess',[UserController::class,"addNewUser"])->name("user.addNew"); //NOVO RETORNO
Route::delete("/users/{id}",[UserController::class, "removeUser"])->name("user.rem");
Route::get('/contact', [ContactsController::class,"contact" ])->name("contact");
