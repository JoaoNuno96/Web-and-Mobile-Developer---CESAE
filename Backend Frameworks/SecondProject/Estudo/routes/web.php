<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,"index" ])->name("home");
Route::get('/welcome', [WelcomeController::class,"info" ])->name("welcome");
Route::get('/contact', [ContactsController::class,"contact" ])->name("contact");
