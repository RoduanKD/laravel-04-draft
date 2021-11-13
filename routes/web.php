<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Setting;
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

    $setting = Setting::all()->last();
    return view('welcome', [
        'skills'    => $skills,
        'image'     => $picture,
        'posts'     => $posts,
        'setting'   => $setting
    ]);

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
})->name('changeLocale')/*->middleware('password.confirm')*/;

Auth::routes(['register' => false, 'verify' => true]);

// to be removed
Route::group(['middleware' => 'auth'], function () {
    Route::get('table-list', function () {
        return view('pages.table_list');
    })->name('table');

    Route::get('typography', function () {
        return view('pages.typography');
    })->name('typography');

    Route::get('icons', function () {
        return view('pages.icons');
    })->name('icons');

    Route::get('map', function () {
        return view('pages.map');
    })->name('map');

    Route::get('notifications', function () {
        return view('pages.notifications');
    })->name('notifications');

    Route::get('rtl-support', function () {
        return view('pages.language');
    })->name('language');

    Route::get('upgrade', function () {
        return view('pages.upgrade');
    })->name('upgrade');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('user', UserController::class, ['except' => ['show']]);
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::resource('posts', AdminPostController::class);
    Route::resource('settings', SettingController::class);
});
