<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiCategoryController extends Controller
{
    public function index()
    {
        return Category::get();
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function store(CategoryRequest $request){
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return $category;
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();
        return $category;
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return ['response'=>'successful'];
    }
}
