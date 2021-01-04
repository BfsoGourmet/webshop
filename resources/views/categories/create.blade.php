@extends('layouts.app')

@section('content')

    @include('partials.errors')

    <h1>{{__('form.create-a-new')}} {{__('category.category')}}</h1>
    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">{{__('category.name')}}:</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
        </div>
        <input type="submit" id="submit" class="btn btn-primary">
    </form>
@stop
