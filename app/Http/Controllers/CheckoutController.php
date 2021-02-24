<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;

class CheckoutController extends Controller
{
    public function create() {
        return view('checkout');
    }

    public function store(CheckoutRequest $request) {
        var_dump($request);
    }

}
