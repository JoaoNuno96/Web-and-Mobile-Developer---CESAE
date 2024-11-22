<?php

use App\Http\Middleware\VerifyAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SigninController;

//HOME
Route::get("/",[HomeController::class, "home"])->name("home");
Route::get("/dashboard",[HomeController::class, "dash"])->name("dash")->middleware("auth");

//BANDS
Route::get("/artist/all",[BandController::class, "allBands"])->name("band.all");
Route::get("/artist/form",[BandController::class, "addForm"])->name("band.form")->middleware("auth");
Route::post("/artist/add",[BandController::class, "addBands"])->name("band.add")->middleware("auth");
Route::get("/artist/select/{id}",[BandController::class, "showArtist"])->name("band.singleshow");
Route::get("/artist/remove/{id}",[BandController::class, "removeArtist"])->name("band.remove")->middleware(VerifyAdmin::class);
Route::get("/artist/form/{id}",[BandController::class, "formArtist"])->name("band.form.change")->middleware("auth");
Route::post("/artist/update",[BandController::class, "updateArtist"])->name("band.update")->middleware("auth");

//ALBUNS
Route::get("/albuns/all",[AlbumController::class, "allAlbuns"])->name("album.all");
Route::get("/albuns/form",[AlbumController::class, "addForm"])->name("album.form")->middleware("auth");
Route::post("/albuns/add",[AlbumController::class, "addAlbum"])->name("album.add")->middleware("auth");
Route::get("/albuns/select/{id}",[AlbumController::class, "showAlbum"])->name("album.singleshow");
Route::get("/albuns/remove/{id}",[AlbumController::class, "removeAlbum"])->name("album.remove")->middleware(VerifyAdmin::class);
Route::get("/albuns/form/{id}",[AlbumController::class, "changeAlbum"])->name("album.form.change")->middleware("auth");
Route::post("/albuns/update",[AlbumController::class, "updateAlbum"])->name("album.update")->middleware("auth");


//LogIn Page
Route::get("/login/form",[LoginController::class, "login"])->name("login.form");
// Route::get("/admin/create",[LoginController::class, "userAdminCreate"])->name("admin.create");
// Route::get("/test/create",[LoginController::class, "userTestCreate"])->name("test.create");

//SignIn Page
Route::get("/sign/form",[SigninController::class, "signin"])->name("sign.form");
// Route::post("/sign/test",[SigninController::class, "test"])->name("sign.test");
