<?php

namespace App\Http\Controllers;

use App\Http\Requests\RebateRequest;
use App\Jobs\ApplyRebate;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Queue\Queue;

class RebateController extends Controller
{
    /**
     * @return View
     */
    public function index()
    {
        //$rebates = Category::paginate(15);
        return view('rebates.index'/*, ['categories' => $categories]*/);
    }

    /**
     * @return View
     */
    public function show()
    {
        //$rebates = Category::paginate(15);
        return view('rebates.index'/*, ['categories' => $categories]*/);
    }

    /**
     * @return View
     */
    public function create(Request $request)
    {
        $categories = Category::all();
        return view('rebates.create', ['categories' => $categories]);
    }

    /**
     * @param RebateRequest $request
     * @return Redirector
     */
    public function store(RebateRequest $request)
    {
        ApplyRebate::dispatch(['categories' => $request->categories, 'percent' => $request->percent]);
        return redirect(route('rebates.index'))->withSuccess(__('form.successfully-rebated'));
    }
}
