<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class BlogController extends Controller
{
    public  function index()
    {
        return view('posts.index', [
            'judul' => "Blog",
            'posts' => Post::get()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'judul' => "Blog Detail",
            'blog' => $post
        ]);
    }
}
