@extends('layouts.app')

@section('content')
    @include('partials.messages')

    <h1>{{__('product.products')}}</h1>

    {{ $products->links() }}

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('product.name')}}</th>
            <th scope="col">{{__('product.price')}}</th>
            <th scope="col">{{__('product.special_price')}}</th>
            <th scope="col">{{__('catalog.categories')}}</th>
            <th scope="col">{{__('form.edit')}}</th>
            <th scope="col">{{__('form.destroy')}}</th>
        </tr>
        </thead>
        <tbody>

        @foreach($products as $product)
            <tr>
                <th scope="row">
                    {{$product->id}}
                </th>
                <td>
                    <a href="{{route('products.show',['product'=>$product])}}">
                        {{$product->name}}
                    </a>
                </td>
                <td>
                    CHF {{$product->price}}
                </td>
                <td>
                      CHF {{$product->special_price ?: 'N/A' }}
                    @if($product->special_price)
                    @else
                    @endif
                </td>
                <td>
                    @foreach($product->categories as $category)
                        {{$category->name}}
                        @if (!$loop->last),@endif
                    @endforeach
                </td>
                <td>
                    <a href="{{route('products.edit',['product'=>$product])}}">
                        <button class="btn btn-light">{{__('form.edit')}}</button>
                    </a>
                </td>
                <td>
                    <form method="POST" action="{{route('products.destroy',['product'=>$product])}}">
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

    <a href="{{route('products.create')}}" id="create-product-link">
        <button class="btn btn-success">{{__('form.create')}}</button>
    </a>
@stop
