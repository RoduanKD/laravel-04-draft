<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    $skills = ['swimming', 'shooting', 'horse riding'];
    $picture = '/images/profile.png';

    $posts = Post::latest()->paginate(6);
    // $posts = Post::all();

    // dd($posts);

    return view('welcome', ['skills' => $skills, 'image' => $picture, 'posts' => $posts]);
})->name('welcome');


Route::get('/contact', [MessageController::class, 'create'])->name('contact');
Route::resource('messages', MessageController::class)->only('store');

Route::resource('posts', PostController::class);
Route::resource('posts.comments', PostCommentController::class)->shallow()->except(['index', 'create', 'show']);
Route::resource('categories', CategoryController::class);
Route::resource('tags', TagController::class);

Route::get('lang/{locale}', function ($locale) {
    // config(['app.locale' => $locale]);
    app()->setlocale($locale);
    session(['locale' => $locale]);
    return redirect()->route('welcome');
    // dd(config('app.locale'), session('locale', 'en'));
})->name('changeLocale');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
