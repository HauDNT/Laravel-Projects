<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/insert', function () {
    DB::table('users')->insert(
        ['name' => 'Trần Thị Thùy Trân','email'=> 'tranttt@gmail.com','password'=> bcrypt('user')]
    );
});

Route::get('posts/add', [PostController::class, 'add']);
Route::get('posts/show', [PostController::class, 'show']);
Route::get('posts/update/{id}', [PostController::class, 'update']);
Route::get('posts/delete/{id}', [PostController::class, 'delete']);

