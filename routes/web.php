<?php

use App\Http\Controllers\Admin\ComicController;
use Illuminate\Support\Facades\Route;

// Controllers:

use App\http\Controllers\Guest\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('welcome');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::resource('comics', ComicController::class);

