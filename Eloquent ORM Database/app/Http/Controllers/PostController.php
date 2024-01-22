<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    function add() {
        // $post = new Post();
        // $post->title = "Post of Laravel";
        // $post->content="Content of Laravel Pro";
        // $post->user_id="5";
        // $post->votes="66";

        // $post->save();

        Post::create([
            'title' => 'Post X',
            'content'=> 'Content post X',
            'user_id' => '3',
            'votes' => 40
        ]);
    }

    function update($id) {
        // Tìm id hàng cần cập nhật
        $post = Post::find($id);
        
        // Điều chỉnh thông tin
        $post->title = "Post of Laravel";
        $post->content="Content of Laravel Pro";
        $post->user_id="4";
        $post->votes="0";

        // Lưu lại CSDL
        $post->save();
    }

    function read() {
        $posts = Post::all();
        return $posts;

        // $posts = Post::where('user_id', 1)->get();
        // $posts = Post::where('title', 'like', '%content%')->get();
        // return $posts;

        // $post = Post::where('user_id', 1)->first();
        // return $post->title;

        // $post = Post::find(2);
        // return $post;

        // $posts = Post::find([2, 4]);
        // return $posts;

        // $posts = Post::orderBy('votes')->get();
        // $posts = Post::orderBy('votes', 'desc')->get();
        // return $posts;

        // $posts = Post::selectRaw("COUNT('id') as number_posts, user_id")
        // ->groupBy('user_id')
        // ->orderBy('number_posts','desc')
        // ->get();

        // return $posts;

        // $posts = Post::limit(2)->offset(1)->get();
        // return $posts;
    }
}
