@extends('layouts.app')

@section('content')

    <h1>{{$product->name}}</h1>
    <table class="table table-sm">
        <thead>
        <tr>
            <th scope="col">Property</th>
            <th scope="col">Value</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{__('catalog.price')}}</td>
            <td>CHF {{$product->price}}</td>
        </tr>
        </tbody>
    </table>
    <br>
    <br>

    <form method="POST" action="{{route('products.destroy',['product'=>$product])}}">
        @csrf
        {{ method_field('DELETE') }}
        <div class="form-group">
            <a href="{{route('products.edit',['product'=>$product])}}">
                <button class="btn btn-light">{{__('form.edit')}}</button>
            </a>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-light" value="{{__('form.destroy')}}">
        </div>
    </form>
@stop
