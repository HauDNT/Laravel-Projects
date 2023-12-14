<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// // Go to show page:
// Route::get('/product/show/{id}', [ProductController::class,'show']);

// // Go to create page:
// Route::get('/product/create', [ProductController::class,'create']);

// // Go to update page:
// Route::get('/product/update/{id}', [ProductController::class,'update']);

// // Go to delete page:
// Route::get('/product/delete/{id}', [ProductController::class,'destroy']);

// Route::resource('product', 'ResourceController');   // Error: Target class [ResourceController] does not exist.
// Fixed:
Route::resource('product', 'App\Http\Controllers\ResourceController');
