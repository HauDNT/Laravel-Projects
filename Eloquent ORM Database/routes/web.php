<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/posts/read', function() {
//     $posts = Post::all();
//     return $posts;
// });

Route::get('posts/read', [PostController::class,'read']);
Route::get('posts/add', [PostController::class,'add']);
Route::get('posts/update/{id}', [PostController::class,'update']);
Route::get('posts/delete/id={id}', [PostController::class,'delete']);
Route::get('posts/restore/id={id}', [PostController::class,'restore']);
Route::get('posts/permanentlyDelete/id={id}', [PostController::class,'permanentlyDelete']);