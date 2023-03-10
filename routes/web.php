<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [HomeController::class, "home"])->name("home");
Route::get("/comics", [ComicController::class, "index"])->name("comics.index");
Route::get("/comics/create", [ComicController::class, "create"])->name("comics.create");
Route::get("/comics/store", [ComicController::class, "store"])->name("comics.store");
Route::get("/comics/show", [ComicController::class, "show"])->name("comics.show");