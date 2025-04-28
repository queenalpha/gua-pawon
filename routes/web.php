<?php

use App\Http\Controllers\ecologyController;
use App\Http\Controllers\historyController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\newsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RSSController;
use App\Http\Controllers\ArticleImageUploadController;



Route::redirect('/', '/gua-pawon');
Route::get('/gua-pawon', [HomeController::class, 'index']);


Route::get('/history', [historyController::class, 'index']);
Route::get('/ecology', [ecologyController::class, 'index']);
Route::get('/berita', [RSSController::class, 'index']);
Route::post('/upload-image', [ArticleImageUploadController::class, 'uploadImage']);
