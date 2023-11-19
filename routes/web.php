<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\User;

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
        "title" => "Home"
    ]);
})->name('home');
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Muhammad Alfarozi",
        "email" => "mr.alfarozy.a.n@gmail.com",
        "gambar" => "avatar.png",
        "description" => "I'm a web developer who is passionate about Cyber Security, Web Technology, and open source, I am form Riau, indonesia.

        I started learning Web Developer since 2019, I'm currently a student at Pasundan University and part of Cyber Army Indonesia"
    ]);
})->name('about');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/categories', function () {
    return view('category.index', [
        'title' => "Post Categories",
        'categories' => Category::get()
    ]);
})->name('category.index');


Route::get('/login', [LoginController::class, 'index'])->name('auth.login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('auth.register');
Route::post('/register', [RegisterController::class, 'store'])->name('auth.register');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
