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
        $tmpArray = array();
        foreach($request->categories as $entry){
            $category = Category::firstOrNew(['uid' => $entry['uid']]);
            $category->uid = $entry['uid'];
            $category->category = $entry['category'];
            $category->save();
            array_push($tmpArray,Category::where('uid',$entry['uid'])->first());
        }
        return $tmpArray;
    }

    public function update(CategoryRequest $request, int $uid)
    {
        $category = Category::where('uid',$uid)->first();
        $category->category = $request->category;
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
