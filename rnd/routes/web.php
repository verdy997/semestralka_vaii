<?php

use App\Http\Controllers\Auth\LogOutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LogInController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/logIn', [LogInController::class, 'index'])->name('logIn');
Route::post('/logIn', [LogInController::class, 'store']);

Route::get('/logOut', [LogOutController::class, 'store'])->name('logOut');

Route::get('/wall', [WallController::class, 'index'])->name('wall');

Route::get('/post', [PostController::class, 'index'])->name('post');
Route::post('/post', [PostController::class, 'store']);
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');

Route::post('/post/{post}/likes', [PostLikeController::class, 'store'])->name('post.likes');
Route::delete('/post/{post}/likes', [PostLikeController::class, 'destroy'])->name('post.likes');

Route::get('/', function () {
    return view('auth.logIn');
});


