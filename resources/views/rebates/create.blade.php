@extends('layouts.app')

@section('content')

    @include('partials.errors')

    <h1>{{__('form.create-a-new')}} {{__('rebate.rebate')}}</h1>
    <form action="{{route('rebates.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="categories">{{__('rebate.category')}}:</label>
            <select name="categories[]" id="categories" multiple>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="percent">{{__('rebate.percent')}}:</label>
            <input class="form-control" type="text" name="percent" id="percent" value="{{ old('percent') }}">
        </div>
        <input type="submit" id="submit" class="btn btn-primary">
    </form>
@stop
