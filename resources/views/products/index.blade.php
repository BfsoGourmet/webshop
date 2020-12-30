@foreach($products as $product)
    <a href="{{route('products.show',['product'=>$product])}}">
        {{$product->name}} - CHF {{$product->price}}
    </a>
    <br>
    @foreach($product->categories as $category)
        {{$category->name}},
    @endforeach
    <br>
    <br>
@endforeach

<br>

<a href="{{route('products.create')}}" id="create-product-link">{{__('form.create')}}</a>
