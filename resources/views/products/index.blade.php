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
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="[ProdImg]" border="0"></a><!--https://picsum.photos/id/{{$loop->iteration + 10}}/450/330-->
                    </div>
                    <div class="contentBx">
                        <span id="productID" style="display: none" >{{$product->id}}</span>
                        <h3 class="productName">{{$product->product}}</h3>
                        <?php
                            $special_prize = DB::table('special_prizes')->select('price')
                                ->where('product_id', $product->id)
                                ->where('start', '<=', date("Y-m-d"))
                                ->where('end', '>=', date("Y-m-d"))
                                ->first();
                            if($special_prize) {
                                $price = $special_prize->price;
                            }
                            else {
                                $price = $product->price;
                            }
                        ?>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">{{$price}}</span></h2>
                        <form method="post" action="{{route('add')}}">
                            {{ csrf_field() }}
                            <input name="id" type="hidden" value="{{$product->id}}">
                            <input type="submit" value="In den Warenkorb" style="text-transform: none" class="details">
                        </form>
                    </div>
                    <div class="inside">
                        <div class="icon"><i class="fas fa-info-circle" style="font-size: 1.7em"></i></div>
                        <div class="contents">
                            <h2>Beschreibung:</h2>
                            <p>{{$product->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{ $products->links('pagination.default') }}

        </div>
@stop
