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
