
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{asset('Logo-f.png')}}">

        <title>Gourmet vs</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{asset('css/products.css')}}">
    </head>

    <body>

        <nav class="site-header sticky-top py-1">
            <div class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="py-2" href="#">
                    <img src="{{ asset('Logoweiss.png') }}" width="45px"height="45px">
                </a>

                <a class="py-2 hd-font d-md-inline-block" href="{{route('welcome')}}"><b>Home</b></a>
                <a class="py-2 hd-font d-md-inline-block" href="{{route('shop_index')}}"><b>Shop</b></a>
                <a class="py-2 hd-font d-md-inline-block" href="#"><b>About</b></a>
                <a class="py-2 hd-font d-md-inline-block" href="#"><b>Warenkorb</b></a>
            </div>
        </nav>
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
                <div class="card">
                    <div class="imgBox">
                        <a herf="#"><img src="https://i.ibb.co/YNVDKW3/nike101.png" alt="[ProdImg]" border="0"></a>
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
        </footer>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    </body>
</html>
