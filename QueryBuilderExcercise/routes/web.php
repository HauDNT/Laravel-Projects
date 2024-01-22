<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('product/show', [ProductController::class, 'show']);
Route::get('product/insert', [ProductController::class, 'insert']);
Route::get('product/update/{id}', [ProductController::class, 'update']);
Route::get('product/delete/{id}', [ProductController::class, 'delete']);