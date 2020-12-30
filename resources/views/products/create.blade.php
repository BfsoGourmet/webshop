@extends('layouts.app')

@section('content')

    @include('partials.errors')

    <h1>Create a new product</h1>
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input class="form-control" type="text" name="price" id="price">
        </div>
        <input type="submit" id="submit" class="btn btn-primary">
    </form>
@stop
