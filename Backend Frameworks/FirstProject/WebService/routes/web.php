<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class,"Welcome"])->name("welcome");

Route::get('/home', [HomeController::class,"Index"])->name("home");
Route::get('/home/welcome/{name}', [HomeController::class,"WelcomeUser"])->name("home/welcome/{name}");

Route::get('/allUsers', [UserController::class,"users"])->name("users.all");
Route::get('/addUsers', [UserController::class,"addUsers"])->name("users.add");

Route::get('/isertUser', [UserController::class,"addUsers"])->name("users.add");

Route::get('/allTask', [TaskController::class,"getAllTask"])->name("task.all");

Route::get("/user_show/{id}", [UserController::class, "viewUser"])->name("users.show");

Route::get("/users_delete/{id}", [UserController::class, "removeUser"])->name("users.delete");

Route::get("/gifts", [GiftController::class, "showGifs"])->name("gifts.show");
Route::get("/gifts/show/{id}", [GiftController::class, "showGiftSingle"])->name("gifts.show.gift");
Route::get("/gifts/remove/{id}", [GiftController::class, "removeGift"])->name("gifts.remove");

//Rota Fallback!!!
Route::fallback(function(){ return view('fallback.erro'); });

