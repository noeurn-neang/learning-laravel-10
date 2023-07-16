<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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

Route::group(['prefix' => 'categories'], function() {
  Route::get('/', [CategoryController::class, 'index']);
  // Create
  Route::get('/create', [CategoryController::class, 'create'])->name('create-category');
  Route::post('/store', [CategoryController::class, 'store'])->name('store-category');

  // Delete
  Route::get('/delete/{id}', [CategoryController::class, 'destroy']);

  // Edit 
  Route::get('/edit/{id}', [CategoryController::class, 'edit']);
  Route::post('/update/{id}', [CategoryController::class, 'update']);
});

Route::group(['prefix' => 'posts'], function() {
  Route::get('/', [PostController::class, 'index']);
});