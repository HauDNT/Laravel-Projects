<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function add()
    {
        DB::table("posts")->insert(
            ['title' => 'Post 3', 'content' => 'Content 3', 'user_id' => 1]
        );
    }

    function update($id)
    {
        // Trỏ đến bảng
        DB::table('posts')
            // Trỏ đến đối tượng chứa id muốn update
            ->where('id', $id)
            ->update([
                // Chọn cặp key - vale là trường dữ liệu và dữ liệu muốn cập nhật vào
                'title' => 'New content',
                'content' => 'Content of post',
                'votes' => 200,
            ]);
    }

function delete($id)
{
    DB::table('posts')
        ->where('id', $id)
        ->delete();
}

    function show()
    {
        // $posts = DB::table('posts')->select('title', 'content')->get();

        // return $posts;

        // $posts = DB::table('posts')->select('title', 'content')->first();

        // $posts = DB::table('posts')->where('id', 2)->first();

        // $posts = DB::table('posts')->find(2);
        // echo $posts->title;
        // print_r($posts);

        // $number_posts = DB::table('posts')->where('user_id', 1)->count();
        // echo $number_posts;

        // $max = DB::table('posts')->max('user_id');
        // $min = DB::table('posts')->min('user_id');
        // $avg = DB::table('posts')->avg('user_id');

        // echo 'Max: ' . $max . '<br>';
        // echo 'Min: ' . $min . '<br>';
        // echo 'Avg: ' . $avg;

        // $posts = DB::table('posts')
        // ->join('users','users.id','=','posts.user_id')
        // ->select('users.*', 'posts.*')
        // ->get();

        // $posts = DB::table('posts')
        // ->where('user_id', '>', 1)
        // ->where('title', 'Like', 'Post 1')
        // ->get();

        // echo '<pre>';
        // print_r($posts);
        // echo '</pre>';
        // return $posts;

        // $posts = DB::table('posts')
        // ->where(
        //     [
        //         ['title', 'like', 'Post%'],
        //         ['votes', '<>', 0]
        //     ]
        // )
        // ->get();

        // echo '<pre>';
        // print_r($posts);
        // echo '</pre>';

        // $posts = DB::table('posts')
        // ->where('votes', '<', 20)
        // ->orWhere('user_id', '=', 3)
        // ->get();

        // echo '<pre>';
        // print_r($posts);
        // echo '</pre>';

        // $posts = DB::table('posts')
        //     ->selectRaw("COUNT('id') as number_posts, user_id")
        //     ->groupBy('user_id')
        //     ->get();

        // echo '<pre>';
        // print_r($posts);
        // echo '</pre>';

        // $posts = DB::table('posts')
        //     ->orderBy('votes', 'desc')
        //     ->orderBy('votes')
        //     ->get();
        // echo '<pre>';
        // print_r($posts);
        // echo '</pre>';

        // $posts = DB::table('posts')
        //     ->selectRaw("COUNT('id') as number_posts, user_id")
        //     ->groupBy('user_id')
        //     ->orderBy('number_posts')
        //     ->get();

        // echo '<pre>';
        // print_r($posts);
        // echo '</pre>';

        // $posts = DB::table('posts')
        //     ->limit(2)
        //     ->offset(3)
        //     ->get();

        // echo '<pre>';
        // print_r($posts);
        // echo '</pre>';
    }
}
