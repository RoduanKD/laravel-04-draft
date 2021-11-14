<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name')->paginate(10, ['id', 'name', 'created_at']);
        return view('admin.categories.index', ['categories' => $categories]);
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|min:2',
        ]);

        $category = Category::create($validated);

        return redirect()->route('admin.categories.index')->withStatus(__('Category is successfully updated.'));
    }


    public function show(Category $category)
    {
        return view('admin.categories.show', ['category' => $category]);
    }


    public function edit(Category $category)
    {
        return view('admin.categories.edit', ['category' => $category]);
    }


    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name'  => 'required|min:2',
        ]);

        $category->update($validated);

        return redirect()->route('admin.categories.index')->withStatus(__('Category is successfully updated.'));
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->withStatus(__('Category is successfully deleted.'));
    }
}
