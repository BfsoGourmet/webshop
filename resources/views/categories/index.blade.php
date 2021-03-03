@extends('layouts.app')
@section('content')


        <div id="mainContent" class="offset-md-1 col-10">
            <div id="filterBar">
                <div class="input-group mb-4 customBorder rounded-pill">
                    <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon3" class="form-control bg-none border-0" style="box-shadow: none">
                    <div class="input-group-append border-0">
                        <button id="button-addon3" type="button" class="btn btn-link text-danger" style="box-shadow: none"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>

            <div id="productContainter"> <!-- here will be an Foreach to load the produts-->
                @foreach($products as $product)
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://picsum.photos/450/330" alt="[ProdImg]" border="0"></a><!--https://i.ibb.co/YNVDKW3/nike101.png-->
                    </div>
                    <div class="contentBx">
                        <span id="productID" style="display: none" >{{$product->id}}</span>
                        <h3 class="productName">{{$product->product}}</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">{{$product->price}}</span></h2>
                        <a href="#" class="details" style="text-transform: none">In den Warenkorb</a><!--was Anzeigen. because we have no details view-->
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="fas fa-info-circle" style="font-size: 1.7em"></i></div>
                        <div class="contents">
                            <h2>Description:</h2>
                            <p>{{$product->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{ $products->links('pagination.default') }}

        </div>
@stop
