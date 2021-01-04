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
        <div class="form-group">
            <label for="categories">{{__('product.category')}}:</label>
            <select class="form-control" name="categories[]" id="categories" multiple>
                @foreach($categories as $category)
                    @if(!$product->categories->contains('id', $category->id))
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @else
                        <option value="{{$category->id}}" selected="selected">{{$category->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <input type="submit" value="{{__('form.save')}}">
    </form>
@stop
