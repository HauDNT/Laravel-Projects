<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('post/index', [PostController::class,'index']);
// Route::get('admin/post/show', [AdminPostController::class,'show']);

// Route::get('child', function() {
//     return view('child', ['data' => "<i>Tien Hau</i>"]);
// });

// Route::get('child', function() {
//     return view('child', ['data' => 5]);
// });

// Route::get('demo', function () {
//     return view('demo', ['n' => 10]);
// });

Route::get('demo', function () {
    $users = array (
        1 => array (
            'name' => 'Nguyen Van A'
        ),        
        2 => array (
            'name' => 'Nguyen Van B'
        ),
        3 => array (
            'name' => 'Nguyen Van C'
        )
    );
    return view('demo', compact('users'));
});

Route::get('child', function() {
    $users = array (
        1 => array (
            'name' => 'Nguyen Van A'
        ),        
        2 => array (
            'name' => 'Nguyen Van B'
        ),
        3 => array (
            'name' => 'Nguyen Van C'
        )
    );
    return view('child', ['data' => 5, 'post_title' => "Laravel Pro", 'users' => compact("users")]);
});