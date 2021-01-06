<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="app.css">
</head>
<body>
{{--<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">--}}
{{--    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Sapium</a>--}}
{{--    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">--}}
{{--    <ul class="navbar-nav px-3">--}}
{{--        <li class="nav-item text-nowrap">--}}
{{--            <a class="nav-link" href="#">Sign out</a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</nav>--}}

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('products.index')}}">
                            <span data-feather="home"></span>
                            Products <span class="sr-only">(products)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('categories.index')}}">
                            <span data-feather="home"></span>
                            Categories <span class="sr-only">(categories)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('rebates.index')}}">
                            <span data-feather="home"></span>
                            Rebates <span class="sr-only">(rebates)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('jobs.index')}}">
                            <span data-feather="home"></span>
                            Jobs <span class="sr-only">(jobs)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="padding-top: 50px;">
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
