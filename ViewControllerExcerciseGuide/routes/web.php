<?php

use App\Http\Controllers\AdminPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/post/add', [AdminPostController::class,'add']);
Route::get('/admin/post/show', [AdminPostController::class,'show']);
Route::get('/admin/post/update/{id}', [AdminPostController::class,'update']);
Route::get('/admin/post/delete/{id}', [AdminPostController::class,'delete']);
