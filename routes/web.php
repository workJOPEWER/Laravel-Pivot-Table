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

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('post-create', [\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::get('post-edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');

Route::get('categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('category-create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
Route::get('category-edit', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');