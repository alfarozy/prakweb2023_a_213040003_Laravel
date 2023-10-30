<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "judul" => "Home"
    ]);
})->name('home');
Route::get('/about', function () {
    return view('about', [
        "judul" => "About",
        "nama" => "Muhammad Alfarozi",
        "email" => "mr.alfarozy.a.n@gmail.com",
        "gambar" => "avatar.png",
        "description" => "I'm a web developer who is passionate about Cyber Security, Web Technology, and open source, I am form Riau, indonesia.

        I started learning Web Developer since 2019, I'm currently a student at Pasundan University and part of Cyber Army Indonesia"
    ]);
})->name('about');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');
