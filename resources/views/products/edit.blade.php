@include('partials.errors')

<form action="{{route('products.update',['product'=>$product])}}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label><input type="text" name="name" value="{{$product->name}}">
    <label for="price">Price:</label><input type="text" name="price" value="{{$product->price}}">
    <input type="submit">
</form>
