<?php

use Illuminate\Support\Facades\Route;

Route::get('/post', function () {
    return view('post.menu');
}) -> name('menu');

Route::get('/post/show', function () {
    return view('post.show');
}) -> name('show');

Route::get('/post/insert', function () {
    return view('post.insert');
}) -> name('insert');

Route::get('/post/update', function () {
    return view('post.update');
}) -> name('update');
