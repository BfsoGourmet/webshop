<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Redirector;

class CategoryController extends Controller
{
    /**
     * @return View
     */
    public function index()
    {
        $categories = Category::paginate(15);
        return view('categories.index', ['categories' => $categories]);
    }

    /**
     * @return View
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * @param CategoryRequest $request
     * @return Redirector
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect(route('categories.index'))->withSuccess(__('form.successfully-stored'));
    }

    /**
     * @param Category $category
     * @return View
     */
    public function show(Category $category)
    {
        return view('categories.show',['category'=>$category]);
    }

    /**
     * @param Category $category
     * @return View
     */
    public function edit(Category $category)
    {
        return view('categories.edit',['category'=>$category]);
    }

    /**
     * @param CategoryRequest $request
     * @param Category $category
     * @return Redirector
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();

        return redirect(route('categories.index'))->withSuccess(__('form.successfully-updated'));
    }

    /**
     * @param Category $category
     * @return Redirector
     * @throws Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('categories.index'))->withSuccess(__('form.successfully-deleted'));
    }
}
