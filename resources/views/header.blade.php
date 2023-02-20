<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body>
{{--<nav class="navbar navbar-expand-lg navbar-light" style="background: rgba(0,189,57,0.5)">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" @auth <a href="{{ url('/dashboard') }}" @else href="" @endauth><img--}}
{{--                src="{{asset('img/logo.jpg')}}" height="65" width="100"--}}
{{--                class="rounded">--}}
{{--        </a>--}}
{{--        <ul class="navbar-nav me-auto">--}}
{{--            <li class="navbar-brand">--}}
{{--                <h4>--}}
{{--                    Secret Box--}}
{{--                </h4>--}}
{{--                <h6>--}}
{{--                    Получи свой подарок--}}
{{--                </h6>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"--}}
{{--                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--            </ul>--}}
{{--            <div class="d-flex hidden d-grid gap-1">--}}
{{--                @if (Route::has('login'))--}}
{{--                    @auth--}}
{{--                        <div class="btn-group">--}}
{{--                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown"--}}
{{--                                    aria-expanded="false">--}}
{{--                                Action--}}
{{--                            </button>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                                <li>--}}
{{--                                    <hr class="dropdown-divider">--}}
{{--                                </li>--}}
{{--                                <li><a class="dropdown-item" href="#">Separated link</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="btn btn-outline-success form-control">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"--}}
{{--                                 class="bi bi-check" viewBox="1 2 15 15">--}}
{{--                                <path--}}
{{--                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>--}}
{{--                                <path--}}
{{--                                    d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>--}}
{{--                            </svg>--}}
{{--                            </i>Логин</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}"--}}
{{--                               class="btn btn-outline-success form-control d-flex justify-content-center">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"--}}
{{--                                     class="bi bi-person-add" viewBox="2 0 15 15">--}}
{{--                                    <path--}}
{{--                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>--}}
{{--                                    <path--}}
{{--                                        d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>--}}
{{--                                </svg>--}}
{{--                                Регистрация</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
