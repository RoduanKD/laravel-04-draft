<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::orderBy('name')->paginate(10, ['id', 'name', 'created_at']);
        return view('admin.tags.index', ['tags' => $tags]);
    }

    public function create()
    {
        return view('admin.tags.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|min:2',
        ]);

        $tag = Tag::create($validated);

        return back()->withStatus(__('Tag is successfully Added.'));
    }


    public function show(Tag $tag)
    {
        return view('admin.tags.show', ['tag' => $tag]);
    }


    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', ['tag' => $tag]);
    }


    public function update(Request $request, Tag $tag)
    {
        $validated = $request->validate([
            'name'  => 'required|min:2',
        ]);

        $tag->update($validated);

        return redirect()->route('admin.tags.index')->withStatus(__('Tag is successfully updated.'));
    }


    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tags.index')->withStatus(__('Tag is successfully deleted.'));
    }
}
