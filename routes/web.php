<?php

use App\Http\Controllers\ecologyController;
use App\Http\Controllers\historyController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\newsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RSSController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleImageUploadController;
use App\Http\Controllers\journalController;

Route::redirect('/', '/gua-pawon');
Route::get('/gua-pawon', [HomeController::class, 'index']);


Route::get('/history', [historyController::class, 'index']);

Route::get('/ecology', [ecologyController::class, 'index']);

Route::get('/berita', [RSSController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::post('/articles/{id_article}/like', [ArticleController::class, 'like'])->name('articles.like');

Route::get('/journal', [journalController::class, 'index']);
Route::get('/journal/search', [journalController::class, 'search'])->name('journals.search');



Route::post('/upload-image', [ArticleImageUploadController::class, 'uploadImage']);
