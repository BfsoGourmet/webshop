@extends('layouts.app')

@section('content')

    @include('partials.errors')

    <h1>{{__('form.create-a-new')}} {{__('product.product')}}</h1>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">{{__('product.name')}}:</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="price">{{__('product.price')}}:</label>
            <input class="form-control" type="text" name="price" id="price" value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <label for="categories">{{__('product.category')}}:</label>
            <select name="categories[]" id="categories" multiple>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" id="submit" class="btn btn-primary">
    </form>
@stop
