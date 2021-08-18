<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::query()->paginate(8),
        ]);
    }

    public function create()
    {
        return view('admin.categories.create', [
            'categories' => Category::all(),
        ]);
    }

    public function store(StoreCategoryRequest $request)
    {
//        dd($request->input());
        Category::query()->create([
            'category_id' => $request->input('parent'),
            'title' => $request->input('title'),
        ]);
        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category,
            'categories' => Category::all(),
        ]);
    }

    public function update(Category $category, UpdateCategoryRequest $request)
    {
        $titleExists = Category::query()->where('title', $request->input('title'))->where('id', '!=', $category->id)->exists();
        if ($titleExists){
            return redirect()->route('categories.edit', ['category' => $category->title])->withErrors(['title' => 'عنوان تکراری است']);
        }
        $category->update([
            'title' => $request->input('title'),
            'category_id' => $request->input('parent'),
        ]);
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        if ($category->categories()->count() > 0){
            return redirect()->route('categories.index')->withErrors(['دسته بندی به علت وجود وابستگی قابل حذف نیست!']);
        }
        $category->delete();
        return redirect()->route('categories.index');
    }
}
