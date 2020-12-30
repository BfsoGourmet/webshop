@extends('layouts.app')

@section('content')

    @include('partials.errors')
    <h1>Edit {{$product->name}}</h1>
    <form action="{{route('products.update',['product'=>$product])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <div class="form-group">
            <input type="text" name="name" value="{{$product->name}}">
        </div>
        <label for="price">Price:</label>
        <div class="form-group">
            <input type="text" name="price" value="{{$product->price}}">
        </div>
        <input type="submit">
    </form>
@stop
