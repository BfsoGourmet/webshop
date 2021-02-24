@extends('layouts.app')
@section('content')

    {{ $products->links() }}

    <!--<div class="row">
            <div id="sidebar" class="col-2" style="background-color: #333333">

            </div>
            <div id="mainContent" class="col-10">

            </div>
        </div>-->


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
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="[ProdImg]" border="0"></a>
                    </div>
                    <div class="contentBx">
                        <h3 class="productName">{{$product->title}}</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">{{$product->price}}</span></h2>
                        <a href="#" class="details">Anzeigen</a>
                    </div>
                </div>
                @endforeach
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="nike101" border="0"></a>
                    </div>
                    <div class="contentBx">
                        <h3 class="productName">[Productname]</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">[Price]</span></h2>
                        <a href="#" class="details">Anzeigen</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="nike101" border="0"></a>
                    </div>
                    <div class="contentBx">
                        <h3 class="productName">[Productname]</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">[Price]</span></h2>
                        <a href="#" class="details">Anzeigen</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="nike101" border="0"></a>
                    </div>
                    <div class="contentBx">
                        <h3 class="productName">[Productname]</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">[Price]</span></h2>
                        <a href="#" class="details">Anzeigen</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="nike101" border="0"></a>
                    </div>
                    <div class="contentBx">
                        <h3 class="productName">[Productname]</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">[Price]</span></h2>
                        <a href="#" class="details">Anzeigen</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="nike101" border="0"></a>
                    </div>
                    <div class="contentBx">
                        <h3 class="productName">[Productname]</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">[Price]</span></h2>
                        <a href="#" class="details">Anzeigen</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="nike101" border="0"></a>
                    </div>
                    <div class="contentBx">
                        <h3 class="productName">[Productname]</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">[Price]</span></h2>
                        <a href="#" class="details">Anzeigen</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="nike101" border="0"></a>
                    </div>
                    <div class="contentBx">
                        <h3 class="productName">[Productname]</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">[Price]</span></h2>
                        <a href="#" class="details">Anzeigen</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="nike101" border="0"></a>
                    </div>
                    <div class="contentBx">
                        <h3 class="productName">[Productname]</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">[Price]</span></h2>
                        <a href="#" class="details">Anzeigen</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="nike101" border="0"></a>
                    </div>
                    <div class="contentBx">
                        <h3 class="productName">[Productname]</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">[Price]</span></h2>
                        <a href="#" class="details">Anzeigen</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="nike101" border="0"></a>
                    </div>
                    <div class="contentBx">
                        <h3 class="productName">[Productname]</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">[Price]</span></h2>
                        <a href="#" class="details">Anzeigen</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="nike101" border="0"></a>
                    </div>
                    <div class="contentBx">
                        <h3 class="productName">[Productname]</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">[Price]</span></h2>
                        <a href="#" class="details">Anzeigen</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="nike101" border="0"></a>
                    </div>
                    <div class="contentBx">
                        <h3 class="productName">[Productname]</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">[Price]</span></h2>
                        <a href="#" class="details">Anzeigen</a>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="nike101" border="0"></a>
                    </div>
                    <div class="contentBx">
                        <h3 class="productName">[Productname]</h3>
                        <h2 class="price">CHF&nbsp;<span class="productPrice">[Price]</span></h2>
                        <a href="#" class="details">Anzeigen</a>
                    </div>
                </div>



            </div>

            <nav aria-label="Product Overview Page Navigation">
                <ul class="pagination pagination-lg justify-content-end">
                    <li class="page-item "><!-- class="disabled" -->
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li><!-- Here we have to do a count for the nuber of pages we need-->
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--<div class="position-relative overflow-hidden bg-Gvs p-3 p-md-5 m-md-3 text-center bg-light"  style="background-image: url({{ asset('Banner2.png') }})">
            <div class="col-md-5 p-lg-5 mx-auto margClass ">
                <img src="{{ asset('Schriftzug-weiss.png') }}">
                <p class="lead font-weight-normal" style="font-size: 25px; color: dimgrey"><b>Die beste Wahl für ihren Einkauf. Gourmet Wallis hat die besten Regional Produkte. Unterstüzen sie die Region.</b></p>
                <a href="{{route('shop_index')}}" class="btn btn-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jetzt einkaufen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
        </div>-->


        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <img src="{{ asset('Logo-f.png') }}" width="45px"height="45px">
                    <small class="d-block mb-3 text-muted">&copy; Seit 2021</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Extras</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="" href="#">Spezial Verpackung</a></li>
                        <li><a class="" href="#">Prime Lieferung</a></li>
                        <li><a class="" href="#">Premium Kunde </a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Unsere Liferanten</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="" href="#">Überischt</a></li>
                        <li><a class="" href="#">Liste</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Unsere Social Media</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="" href="#">Twitter</a></li>
                        <li><a class="" href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="" href="#">Unser Team</a></li>
                        <li><a class="" href="#">Location</a></li>
                        <li><a class="" href="#">Datenschutz</a></li>
                    </ul>
                </div>
            </div>
@stop
