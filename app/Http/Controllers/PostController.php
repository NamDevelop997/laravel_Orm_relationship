<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function read()
    {
        return Post::find(3)->user()->get();
    }

    function add()
    {
        Post::create([
            'title' => 'title 3',
            'content' => 'content 3',
            'user_id' => 1
        ]);
    }
}
