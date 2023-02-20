<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

</head>
<body class="font-sans antialiased">
<div class="container-fluid">
    @auth
        <div class="row">
        <div class="col-4">
            <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px;">
                <img
                    src="https://www.liveauctioneers.com/news/wp-content/uploads/2021/03/acn-032321-twitter-featured.jpg"
                    alt="" class="" width="64" height="64">
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="btn btn-outline-primary form-control border border-light"
                           aria-current="page">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-outline-primary form-control border border-light">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-outline-primary form-control border border-light">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#table"></use>
                            </svg>
                            Orders
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-outline-primary form-control border border-light">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Products
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-outline-primary form-control border border-light">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#people-circle"></use>
                            </svg>
                            Customers
                        </a>
                    </li>
                </ul>
                <hr>
                <a href="" class="btn btn-primary rounded-pill form-control">Твитнуть</a>
            </div>
        </div>
        <div class="col-4">
            {{ $slot }}
        </div>
        <div class="col-4">
            
        </div>
    </div>
    @elseauth
        {{ $slot }}
    @endauth
</div>

</body>
</html>
