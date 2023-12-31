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
