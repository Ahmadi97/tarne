<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandsRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brands.index', [
            'brands' => Brand::query()->paginate(8),
        ]);
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(StoreBrandsRequest $request)
    {
        $path = $request->file('image')->storeAs('public/image', $request->file('image')->getClientOriginalName());
        Brand::query()->create([
            'title' => $request->input('title'),
            'image' => $path,
        ]);

        return redirect()->route('brands.index');
    }

    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', [
            'brand' => $brand,
        ]);
    }

    public function update(Brand $brand, UpdateBrandRequest $request)
    {
        $path = $brand->image;

        if ($request->hasFile('image')){
            $path = $request->file('image')->storeAs('public/image', $request->file('image')->getClientOriginalName());
        }

        $brand->update([
            'title' => $request->input('title'),
            'image' => $path,
        ]);

        return redirect()->route('brands.index');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index');
    }
}
