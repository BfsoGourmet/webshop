@extends('layouts.app')

@section('content')
    @include('partials.messages')

    <h1>{{__('rebate.rebates')}}</h1>

    <a href="{{route('rebates.create')}}" id="create-rebate-link">
        <button class="btn btn-success">{{__('form.create')}}</button>
    </a>
@stop
