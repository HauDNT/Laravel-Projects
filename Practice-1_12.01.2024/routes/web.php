<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// CUD donvido
Route::get('donvido/insert/{ten_don_vi}', [AdminController::class,'insert_donvido']);
Route::get('donvido/update/{ma_don_vi}/{ten_don_vi}', [AdminController::class,'update_donvido']);
Route::get('donvido/delete/{ma_don_vi}', [AdminController::class,'delete_donvido']);

// CUD cambien
Route::get('cambien/insert/{ten_cam_bien}', [AdminController::class,'insert_cambien']);
Route::get('cambien/update/{ma_cam_bien}/{ten_cam_bien}', [AdminController::class,'update_cambien']);
Route::get('cambien/delete/{ma_cam_bien}', [AdminController::class,'delete_cambien']);