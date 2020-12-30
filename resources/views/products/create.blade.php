@include('partials.errors')

<h2>Form to create new Products</h2>
<form action="{{route('products.store')}}" method="POST">
    @csrf
    <label for="name">Name:</label><input type="text" name="name" id="name">
    <label for="price">Price:</label><input type="text" name="price" id="price">
    <input type="submit" id="submit">
</form>
