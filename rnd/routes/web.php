<?php

use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LogInController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WallController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/adminPage', [UserController::class, 'index'])->name('adminPage');
Route::post('/addUser', [UserController::class, 'addUser'])->name('useradd');
Route::delete('/remove/{id}', [UserController::class, 'deleteUser'])->name('userDel');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/logIn', [LogInController::class, 'index'])->name('logIn');
Route::post('/logIn', [LogInController::class, 'store']);

Route::get('/logOut', [LogOutController::class, 'store'])->name('logOut');

Route::get('/profile/{user:name}', [ProfileController::class, 'index'])->name('profile.show');
Route::get('/profile/{user:name}/profOption', [ProfileController::class, 'options'])->name('profile.option');
Route::get('/profile/{id}', [ProfileController::class, 'getProfile']);
Route::put('/profile/{user:name}', [ProfileController::class, 'updateProfile'])->name('profile.update');

Route::get('/wall', [WallController::class, 'index'])->name('wall');

Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);
Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');
Route::get('post/getMorePosts', [PostController::class, 'getMorePosts'])->name('post.getMorePosts');

Route::post('/post/{post}/likes', [PostLikeController::class, 'store'])->name('post.likes');
Route::delete('/post/{post}/likes', [PostLikeController::class, 'destroy'])->name('post.likes');

Route::get('/', function () {
    return view('home');
});


