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
        
    }

    public function create()
    {

    }

    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
    }


    public function show(Category $category)
    {
    }

    public function edit(Category $category)
    {
        
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();
    }

    public function destroy(Category $category)
    {
        $category->delete();
    }
}