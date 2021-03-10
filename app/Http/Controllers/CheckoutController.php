<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Address;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;

class CheckoutController extends Controller
{
    public function create() {
        return view('checkout');
    }

    public function store(CheckoutRequest $request) {
        $order = new order();
        $deliveryAddress = new address();
        $deliveryAddress->address = $request->addressDelivery;
        $deliveryAddress->zipcode = $request->postCodeDelivery;
        $deliveryAddress->city = $request->cityDelivery;

        $customerDelivery = new customer();
        $customerDelivery->firstname = $request->firstNameDelivery;
        $customerDelivery->lastname = $request->lastNameDelivery;
        $customerDelivery->phone = $request->phoneDelivery;
        $customerDelivery->email = $request->emailDelivery;

        $deliveryAddress->customer = $customerDelivery;

        $order->shipping_address = $deliveryAddress;

        if($request->hasDifferentAddress == false){

            $order->billing_address = $deliveryAddress;

        }

        else {

            $billingAddress = new address();
            $billingAddress->address = $request->addressBilling;
            $billingAddress->zipcode = $request->postCodeBilling;
            $billingAddress->city = $request->cityBilling;

            $customerBilling = new customer();
            $customerBilling->firstname = $request->firstNameBilling;
            $customerBilling->lastname = $request->lastNameBilling;
            $customerBilling->phone = $request->phoneBilling;
            $customerBilling->email = $request->emailBilling;

            $billingAddress->customer = $customerBilling;

            $order->billing_address = $billingAddress;

        }

        $order->customer = $customerDelivery;
/*        $order->status = status*/;

        $order->save();
        return redirect(route('checkout.index'))->withSuccess(__('form.successfully-stored'));
    }

}
