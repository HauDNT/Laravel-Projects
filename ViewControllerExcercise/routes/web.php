<?php

use App\Http\Controllers\AdminPostController;
use Illuminate\Support\Facades\Route;

Route::get('/post/menu', [AdminPostController::class,'menu']) -> name('menu');
Route::get('/post/insert', [AdminPostController::class,'insert']) -> name('insert');
Route::get('/post/show', [AdminPostController::class,'show']) -> name('show');
Route::get('/post/update/{id}', [AdminPostController::class,'update']) -> name('update');
Route::get('/post/delete/{id}', [AdminPostController::class,'delete']) -> name('delete');
