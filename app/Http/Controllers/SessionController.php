<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    function addItem(SessionRequest $request){
        $cart=$request->session()->pull('cart',function(){
            return array();
        });
        if(in_array($request->id,$cart)){
            $amount =$cart[$request->id];
        }
        else{
            $amount =1;
        }
        //$item=array($request->input('id'),$amount);
        array_push($cart,[$request->id =>$amount]);
        $request->session()->flash('cart', $cart);
    }

    function removeItem(SessionRequest $request){
        $cart=$request->session()->pull('cart');
        --$cart[$request->id];
        $request->session()->flash('cart', $cart);
    }

    function delete(SessionRequest $request){
        $cart=$request->session()->pull('cart');
        unset($cart[$request->id]);
        $request->session()->flash('cart', $cart);
    }

    function deleteAll(SessionRequest $request){
        $request->session()->forget('cart');
        $request->session()->flush();
    }

    function deleteSession(SessionRequest $request){

    }

    function getSessionCart(){
        return true;
    }
}
