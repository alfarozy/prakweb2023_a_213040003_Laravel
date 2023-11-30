<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Muhammad Alfarozi",
            'username' => 'alfarozy',
            'email' => "alfarozi@alfarozi.com",
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => "Koji Xenpai",
            'email' => "koji@gmail.com",
            'username' => 'koji.xenpai',
            'password' => bcrypt('password')
        ]);
    }
}
