<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SimilarPosts;

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


Route::get('/all', [PagesController::class, "newinfo"]);

Route::get('/', [PagesController::class, "favorites"]);

Route::get('/post/{id}' , [PagesController::class, "postPage"]);

Route::get('/search' , [PagesController::class, "search"])->name('search');

Route::get('/similar/{categoryId}' , [SimilarPosts::class, "similar"])->name('SimilarPostsShow');





