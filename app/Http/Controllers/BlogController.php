<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Post;

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

    public function create()
    {
        $title1 = "This is my first post";
        $title2 = "This is my second post";
        Post::create([
            'author' => "Koji Xenpai",
            'title' => $title1,
            'slug' => str()->title($title1),
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ipsum ut iure recusandae dolor, ratione dignissimos rem molestiae cumque, quas dicta saepe culpa voluptas velit aperiam accusamus modi commodi nam?',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ipsum ut iure recusandae dolor, ratione dignissimos rem molestiae cumque.'
        ]);
        Post::create([
            'author' => "Alfarozi",
            'title' => $title2,
            'slug' => str()->title($title2),
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ipsum ut iure recusandae dolor, ratione dignissimos rem molestiae cumque, quas dicta saepe culpa voluptas velit aperiam accusamus modi commodi nam?',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ipsum ut iure recusandae dolor, ratione dignissimos rem molestiae cumque.'
        ]);

        return  'ok';
    }
}
