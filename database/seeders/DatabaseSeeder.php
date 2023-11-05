<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);
        Category::create([
            'name' => 'Dev Ops',
            'slug' => 'Dev-ops'
        ]);
        Post::factory(20)->create();

        // $this->call(UserSeeder::class);
        // $this->call(PostSeeder::class);
    }
}
