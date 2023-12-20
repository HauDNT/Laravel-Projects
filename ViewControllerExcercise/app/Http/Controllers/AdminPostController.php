<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    function menu() {
        return view('post.menu');
    }

    function insert() {
        return view('post.insert');
    }

    function update($id) {
        return view('post.update', compact('id'));
    }

    function delete($id) {
        return view('post.delete', compact('id'));
    }

    function show() {
        return view('post.show');
    }
}
