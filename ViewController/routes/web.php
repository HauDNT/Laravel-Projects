<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('post/index', [PostController::class,'index']);
// Route::get('admin/post/show', [AdminPostController::class,'show']);

Route::get('child', function() {
    return view('child');
});



