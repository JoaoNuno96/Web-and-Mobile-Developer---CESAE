<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;


Route::get('/', [HomeController::class,"Index"])->name("home");
Route::get('/welcome', [HomeController::class,"Welcome"])->name("welcome");
Route::get('/home/welcome/{name}', [HomeController::class,"WelcomeUser"])->name("home/welcome/{name}");
Route::get("/anotations",[HomeController::class,"anotations"])->name("class.anotations");

Route::get('/allUsers', [UserController::class,"users"])->name("users.all");
Route::get('/form/add', [UserController::class,"form"])->name("users.form");
Route::post('/form/add/sucess', [UserController::class,"add"])->name("users.add");
Route::get("/user_show/{id}", [UserController::class, "viewUser"])->name("users.show");
Route::get("/users_delete/{id}", [UserController::class, "removeUser"])->name("users.delete");
Route::post('/user/update/sucess', [UserController::class,"updateUser"])->name("users.update");

Route::get('/allTask', [TaskController::class,"getAllTask"])->name("task.all");
Route::get("/task/form",[TaskController::class,"form"])->name("task.form");
Route::post("/task/form/add",[TaskController::class,"add"])->name("task.add");
Route::get("/task/view/{id}/{username}",[TaskController::class,"taskView"])->name("task.view.item");
Route::get("/task/remove/{id}",[TaskController::class,"removeTask"])->name("task.remove");
Route::post("/task/update",[TaskController::class,"update"])->name("task.update");

Route::get("/gifts", [GiftController::class, "showGifs"])->name("gifts.show");
Route::get("/gifts/show/{id}", [GiftController::class, "showGiftSingle"])->name("gifts.show.gift");
Route::get("/gifts/remove/{id}", [GiftController::class, "removeGift"])->name("gifts.remove");
Route::get("/gifts/form", [GiftController::class, "form"])->name("gifs.form");
Route::post("/gifts/form/add", [GiftController::class, "add"])->name("gifs.form.add");

Route::get("/dashboard/home", [DashboardController::class, "dashHome"])->name("dashboard.home")->middleware("auth");

//Rota Fallback!!!
Route::fallback(function(){ return view('fallback.erro'); });

