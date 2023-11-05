<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;



class BlogController extends Controller
{
    public  function index()
    {
        return view('posts.index', [
            'judul' => "Blog",
            'posts' => Blog::all()
        ]);
    }

    public function show($slug)
    {
        return view('posts.show', [
            'judul' => "Blog Detail",
            'blog' => Blog::find($slug)
        ]);
    }
}
