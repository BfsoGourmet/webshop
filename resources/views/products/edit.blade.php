@extends('layouts.app')

@section('content')

    @include('partials.errors')
    <h1>{{__('form.edit')}} {{$product->name}}</h1>
    <form action="{{route('products.update',['product'=>$product])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">{{__('product.name')}}:</label>
        <div class="form-group">
            <input type="text" name="name" value="{{$product->name}}">
        </div>
        <label for="price">{{__('product.price')}}:</label>
        <div class="form-group">
            <input type="text" name="price" value="{{$product->price}}">
        </div>
        <input type="submit" value="{{__('form.save')}}">
    </form>
@stop
