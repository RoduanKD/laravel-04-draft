<?php

use App\Models\Post;
use Illuminate\Http\Request;
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

    $posts = Post::all();
    // dd($posts);

    return view('welcome', ['skills' => $skills, 'image' => $picture, 'posts' => $posts]);
})->name('welcome');


Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/message', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'message'   => 'required|min:10',
    ]);

    return redirect()->route('welcome');
});

Route::get('/posts', function () {
    return view('posts.index', ['posts' => Post::all()]);
})->name('posts.index');

Route::get('/posts/{post}', function (Post $post) {
    return view('posts.show', ['post' => $post]);
})->name('posts.show');

Route::view('/posts/create', 'posts.create')->name('posts.create');

Route::post('/posts', function (Request $request) {
    $request->validate([
        'title'     => 'required|min:3',
        'content'   => 'required',
    ]);

    $post = new Post();
    $post->title = $request->title;
    $post->content = $request->content;
    $post->save();

    return redirect()->route('welcome');
})->name('posts.store');


Route::get('/posts/{post}/edit', function (Post $post) {
    return view('posts.edit', ['post' => $post]);
})->name('posts.edit');


Route::put('/posts/{post}', function (Request $request, Post $post) {
    $request->validate([
        'title'     => 'required|min:3',
        'content'   => 'required',
    ]);

    $post->title = $request->title;
    $post->content = $request->content;
    $post->save();

    return redirect()->route('welcome');
})->name('posts.update');

Route::delete('/posts/{post}', function (Post $post) {
    $post->delete();

    return redirect()->route('posts.index');
})->name('posts.destory');
