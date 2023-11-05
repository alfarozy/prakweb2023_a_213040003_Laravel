<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);
        Category::create([
            'name' => 'Dev Ops',
            'slug' => 'Dev-ops'
        ]);

        $title1 = "This is my first post";
        $title2 = "This is my second post";
        Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => $title1,
            'slug' => str()->slug($title1),
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ipsum ut iure recusandae dolor, ratione dignissimos rem molestiae cumque, quas dicta saepe culpa voluptas velit aperiam accusamus modi commodi nam?',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ipsum ut iure recusandae dolor, ratione dignissimos rem molestiae cumque.'
        ]);
        Post::create([
            'user_id' => 2,
            'category_id' => 2,
            'title' => $title2,
            'slug' => str()->slug($title2),
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ipsum ut iure recusandae dolor, ratione dignissimos rem molestiae cumque, quas dicta saepe culpa voluptas velit aperiam accusamus modi commodi nam?',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam ipsum ut iure recusandae dolor, ratione dignissimos rem molestiae cumque.'
        ]);
    }
}
