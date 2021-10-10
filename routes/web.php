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
});


Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/message', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'message'   => 'required|min:10',
    ]);

    return redirect('/');
});

Route::get('/posts', function () {
    return view('posts.index', ['posts' => Post::all()]);
});

Route::get('/posts/{id}', function ($id) {
    return view('posts.show', ['post' => Post::find($id)]);
});

Route::view('/posts/create', 'posts.create');

Route::post('/posts', function (Request $request) {
    $request->validate([
        'title'     => 'required|min:3',
        'content'   => 'required',
    ]);

    $post = new Post();
    $post->title = $request->title;
    $post->content = $request->content;
    $post->save();

    return redirect('/');
});


Route::get('/posts/{id}/edit', function ($id) {
    $post = Post::find($id);

    return view('posts.edit', ['post' => $post]);
});


Route::put('/posts/{id}', function (Request $request, $id) {
    $request->validate([
        'title'     => 'required|min:3',
        'content'   => 'required',
    ]);

    $post = Post::find($id);
    $post->title = $request->title;
    $post->content = $request->content;
    $post->save();

    return redirect('/');
});

Route::delete('/posts/{id}', function ($id) {
    $post = Post::find($id);
    $post->delete();

    return redirect('/posts');
});
