<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'categories'    => 'array',
            'tags'          => 'array',
            'categories.*'  => 'numeric',
            'tags.*'        => 'numeric',
        ]);

        $posts = Post::query();

        if ($request->filled('q')) {
            $posts->where('title', 'like', "%$request->q%");
            $posts->orWhere('content', 'like', "%$request->q%");
        }

        if ($request->filled('categories')) {
            $posts->whereIn('category_id', $request->categories);
        }

        if ($request->filled('tags')) {
            $posts->whereHas('tags', function (Builder $q) use ($request) {
                $q->whereIn('id', $request->tags);
            });
        }

        $posts = $posts->paginate(6);
        $categories = Category::all();
        $tags = Tag::all();

        return view('posts.index', ['posts' => $posts, 'categories' => $categories, 'tags' => $tags]);
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
