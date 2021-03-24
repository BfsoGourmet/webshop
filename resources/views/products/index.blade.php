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
                        <a href="#" class="details buttonsubmit" style="text-transform: none">In den Warenkorb&nbsp;&nbsp;
                            <i class="fa-xs fas fa-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Verfügbarkeit" style="color:#4dff4d;text-shadow: 0 0 4px #000;"></i>
                        </a><!--was Anzeigen. because we have no details view-->
                        <form class="hiddenfrom" method="post" style="display: none">
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
        <script>
            $( document ).ready(function() {
                $(".buttonsubmit").click(function() {
                    $(this).parent().find(".hiddenfrom").submit();

                    {{--var formValues= $(this).parent().find(".hiddenfrom").serialize();--}}
                    {{--console.log(formValues);--}}

                    {{--$.ajax({--}}
                    {{--    methode: "POST",--}}
                    {{--    url: "{{route('addOne')}}",--}}
                    {{--    data: formValues,--}}
                    {{--    success: console.log("added")--}}
                    {{--});--}}
                });
            });
        </script>
@stop
