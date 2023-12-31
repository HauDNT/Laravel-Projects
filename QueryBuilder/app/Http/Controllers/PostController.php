<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function add() {
        DB::table("posts")->insert(
            ['title' => 'Post 2', 'content' => 'Content 2', 'user_id' => 1]
        );
    }
}
