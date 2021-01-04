@extends('layouts.app')

@section('content')

    @include('partials.errors')
    <h1>{{__('form.edit')}} {{$category->name}}</h1>
    <form action="{{route('categories.update',['category'=>$category])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">{{__('category.name')}}:</label>
        <div class="form-group">
            <input type="text" name="name" value="{{$category->name}}">
        </div>
        <input type="submit" value="{{__('form.save')}}">
    </form>
@stop
