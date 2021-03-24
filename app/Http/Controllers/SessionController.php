<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    function getCart(Request $request){
        if($request->session()->has('cart')){
            $cart=$request->session()->pull('cart');
        }
        else{
            $cart=[];
        }
        return $cart;
    }

    function add(SessionRequest $request){
        $cart=$this->getCart($request);

        if(isset($cart[$request->id])){
            ++$cart[$request->id][1];
        }
        else{
            $cart[$request->id][0]=$request->id;
            $cart[$request->id][1]=1;
        }

        $request->session()->put('cart', $cart);
    }

    function remove(SessionRequest $request){
        $cart=$this->getCart($request);
        if(isset($cart[$request->id])){
            if($cart[$request->id][1]==1){
                unset($cart[$request->id]);
            }
            else{
                --$cart[$request->id][1];
            }
        }
        $request->session()->flash('cart', $cart);
    }

    function delete(SessionRequest $request){
        $cart=$this->getCart($request);
        unset($cart[$request->id]);
        $request->session()->flash('cart', $cart);
    }

    function deleteAll(SessionRequest $request){
        $request->session()->forget('cart');
        $request->session()->flush();
    }
}
