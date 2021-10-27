<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', ['posts' => Post::all()]);
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create', ['categories' => $categories, 'tags' => $tags]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'title'     => 'required|min:3',
            'content'   => 'required',
            'category_id'   => 'required|numeric|exists:categories,id',
            'tags'          => 'required|array|min:1|max:5',
            'tags.*'        => 'required|numeric|exists:tags,id',
        ]);
        // \dd($request);
        $post = Post::create($validation);

        $post->tags()->attach($request->tags);

        return redirect()->route('categories.show', $request->category_id);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title'     => 'required|min:3',
            'content'   => 'required',
        ]);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('welcome');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
