{{$product->name}} - CHF {{$product->price}}

<br>
<br>
<a href="{{route('products.edit',['product'=>$product])}}">Edit</a><br>
<form action="{{route('products.destroy',['product'=>$product])}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete">
</form>
