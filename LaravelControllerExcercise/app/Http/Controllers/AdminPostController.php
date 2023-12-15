<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    function index() {
        return "Xem danh sách bài viết";
    }

    function create() {
        return view("post.create");
    }

    function update($id) {
        return view("post.update", array('id' => $id));
    }

    function destroy($id) {
        return view('post.delete', array('id'=> $id));
    }
}
