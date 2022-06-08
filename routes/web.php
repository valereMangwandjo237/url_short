<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\UrlController;

Route::get('/', [UrlController::class, "create"])->name("create");

Route::post("/", [UrlController::class, "store"]);

Route::get("/{shortened}", [UrlController::class, "show"])->name("show");
