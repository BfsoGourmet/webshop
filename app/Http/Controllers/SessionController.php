<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionRequest;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    function insert(SessionRequest $request){
        if($request->session()->get('cart')){
            $cart=$request->session()->pull('cart');

        }
        /php-map-org
        else{
            $cart=array();
            array_push($cart,[$request->id => 1]);
        }
        $request->session()->keep(['cart',$cart]);
    }

    function update(SessionRequest $request){

    }

    function delete(SessionRequest $request){

    }

    function deleteAll(SessionRequest $request){

    }

    function deleteSession(SessionRequest $request){

    }

    function getSessionData(){
        return true;
    }
}
