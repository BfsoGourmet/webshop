
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{asset('Logo-f.png')}}">

        <title>Gourmet vs</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

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

        <div class="position-relative overflow-hidden bg-Gvs p-3 p-md-5 m-md-3 text-center bg-light"  style="background-image: url({{ asset('Banner2.png') }})">
            <div class="col-md-5 p-lg-5 mx-auto margClass ">
                <img src="{{ asset('Schriftzug-weiss.png') }}">
                <p class="lead font-weight-normal" style="font-size: 25px; color: #909090"><span style="font-weight: bold">Die beste Wahl für ihren Einkauf. Gourmet Wallis hat die besten Regional Produkte. Unterstüzen sie die Region.</span></p>
                <a href="{{route('shop_index')}}" class="btn btn-lg btn-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jetzt einkaufen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </div>
        </div>


        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <img src="{{ asset('Logo-f.png') }}" width="45px"height="45px">
                    <small class="d-block mb-3 text-muted">&copy; Seit 2021</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Extras</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Spezial Verpackung</a></li>
                        <li><a class="text-muted" href="#">Prime Lieferung</a></li>
                        <li><a class="text-muted" href="#">Premium Kunde </a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Unsere Liferanten</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Überischt</a></li>
                        <li><a class="text-muted" href="#">Liste</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Unsere Social Media</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Twitter</a></li>
                        <li><a class="text-muted" href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Unser Team</a></li>
                        <li><a class="text-muted" href="#">Location</a></li>
                        <li><a class="text-muted" href="#">Datenschutz</a></li>
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
