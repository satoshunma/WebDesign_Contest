<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('/inquiry', [PageController::class, 'inquiry']);
Route::get('/category', [PageController::class, 'category']);
Route::get('/news', [PageController::class, 'news']);
Route::get('/newarriveal', [PageController::class, 'newarriveal']);
Route::get('/mypage', [PageController::class, 'mypage']);


Route::get('/category/{slug}', [CategoryController::class, 'show']);
Route::get('/news/{id}', [NewsController::class, 'notice']);


Route::get('/post/{id}', [CategoryController::class, 'detail'])->name('post.detail');