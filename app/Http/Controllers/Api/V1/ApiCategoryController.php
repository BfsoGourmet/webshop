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

    public function show(int $uid)
    {
        return Category::where('uid',$uid)->first();
    }

    public function store(CategoryRequest $request){
        $category = new Category();
        $category->uid = $request->uid;
        $category->name = $request->name;
        $category->save();
        return $category;
    }

    public function update(CategoryRequest $request, int $uid)
    {
        $category = Category::where('uid',$uid)->first();
        $category->name = $request->name;
        $category->save();
        return $category;
    }

    public function destroy(int $uid)
    {
        $category = Category::where('uid',$uid)->first();
        $category->delete();
        return ['response'=>'successful'];
    }
}
