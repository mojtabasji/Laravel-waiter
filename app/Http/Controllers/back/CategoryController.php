<?php

namespace App\Http\Controllers\back;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Prophecy\Call\Call;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::get();
        return view('back.category.categorys', compact('categorys'));
    }

    public function insert()
    {
        return view('back.category.categoryinsert');
    }

    public function edit(Category $category)
    {
        return view('back.category.categoryedit',compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('admin.categorys'));
    }

    public function store(Request $request)
    {
        $validatedData= $request->validate([
            'name' => 'required',
        ]);
        $category = new Category();
        $category->create($request->all());

        return redirect(route('admin.categorys'));
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        $category->name = $request->name;
        $category->save();
        return redirect(route('admin.categorys'));
    }
}
