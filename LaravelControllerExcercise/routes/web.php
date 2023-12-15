<?php

use App\Http\Controllers\AdminPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


# Quản lý admin trang bài viết:
// Route::resource('post','App\Http\Controllers\AdminPostController');


// -------------------------------------------------------------------------------

# Xem danh sách bài viết:
Route::get('post', [AdminPostController::class, 'index']);

# Thêm bài viết:
Route::get('post/create', [AdminPostController::class, 'create']);

# Cập nhật bài viết:
Route::get('post/update/{id}', [AdminPostController::class, 'update']);

# Xóa bài viết:
Route::get('post/delete/{id}', [AdminPostController::class, 'destroy']);
