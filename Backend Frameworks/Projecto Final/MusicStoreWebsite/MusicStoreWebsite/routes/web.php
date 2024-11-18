<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\HomeController;

//HOME
Route::get("/",[HomeController::class, "home"])->name("home");

//BANDS
Route::get("/artist/all",[BandController::class, "allBands"])->name("band.all");
Route::get("/artist/form",[BandController::class, "addForm"])->name("band.form");
Route::post("/artist/add",[BandController::class, "addBands"])->name("band.add");
Route::get("/artist/select/{id}",[BandController::class, "showArtist"])->name("band.singleshow");
Route::get("/artist/remove/{id}",[BandController::class, "removeArtist"])->name("band.remove");

//ALBUNS
Route::get("/albuns/all",[AlbumController::class, "allAlbuns"])->name("album.all");
Route::get("/albuns/form",[AlbumController::class, "addForm"])->name("album.form");
Route::post("/albuns/add",[AlbumController::class, "addAlbum"])->name("album.add");
Route::get("/albuns/select/{id}",[AlbumController::class, "showAlbum"])->name("album.singleshow");
Route::get("/albuns/remove/{id}",[AlbumController::class, "removeAlbum"])->name("album.remove");
