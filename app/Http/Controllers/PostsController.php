<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostsController extends Controller
{
    public function view($slug) 
    {
        // $post = Post::where('slug', $slug)->firstOrFail();

        // return view('post', [
        //     'post' => $post
        // ]);

        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
