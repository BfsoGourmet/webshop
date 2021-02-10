<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function create() {
        return view('checkout');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
    }

}
