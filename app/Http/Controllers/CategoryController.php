<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Redirector;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(15);
        return view('categories.index',['categories'=>$categories]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->uid = $request->uid;
        $category->name = $request->name;
        $category->save();

        return redirect(view('categories.index'))->withSuccess(__('form.successfully-stored'));;
    }


    public function show(Category $category)
    {
        return view('categories.show',['category'=>$category]);
    }

    public function edit(Category $category)
    {
        return view('categories.edit',['category'=>$category]);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->uid = $request->uid;
        $category->name = $request->name;
        $category->save();

        return redirect(route('categories.index'))->withSuccess(__('form.successfully-updated'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('categories.index'))->withSuccess(__('form.successfully-deleted'));

    }
}
