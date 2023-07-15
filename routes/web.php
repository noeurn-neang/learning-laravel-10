<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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

// Route::get('/',[FrontendController::class, 'index']);

Route::get('/', [AdminController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/create', [CategoryController::class, 'create'])->name('create-category');

Route::post('/categories/store', [CategoryController::class, 'store'])->name('store-category');

