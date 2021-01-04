@extends('layouts.app')

@section('content')
    @include('partials.messages')

    <h1>{{__('category.categories')}}</h1>

    {{ $categories->links() }}

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('category.name')}}</th>
            <th scope="col">{{__('form.edit')}}</th>
            <th scope="col">{{__('form.destroy')}}</th>
        </tr>
        </thead>
        <tbody>

        @foreach($categories as $category)
            <tr>
                <th scope="row">
                    {{$category->id}}
                </th>
                <td>
                    <a href="{{route('categories.show',['category'=>$category])}}">
                        {{$category->name}}
                    </a>
                </td>
                <td>
                    <a href="{{route('categories.edit',['category'=>$category])}}">
                        <button class="btn btn-light">{{__('form.edit')}}</button>
                    </a>
                </td>
                <td>
                    <form method="POST" action="{{route('categories.destroy',['category'=>$category])}}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <div class="form-group">
                            <input type="submit" class="btn btn-light" value="{{__('form.destroy')}}">
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{route('categories.create')}}" id="create-category-link">
        <button class="btn btn-success">{{__('form.create')}}</button>
    </a>
@stop
