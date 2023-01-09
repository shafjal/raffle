<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <link rel="icon" href="url('/title.png')}}" type="image/gif/png">
    <title>Raffle Draw</title>
    <!-- Title Logo -->
    <link rel="icon" href="/title.png" type="image/gif/png">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/caf4fd03c7.js" crossorigin="anonymous"></script>
    {{-- version 4 --}}
    <link rel="stylesheet" href="{{ url('/fontawesome/css/all.min.css') }}">
    {{-- version 6 --}}
    <link rel="stylesheet" href="{{ url('/fontawesome6/css/all.min.css') }}">
    <!-- Boostrap 4.0.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/bootstrap/dist/css/bootstrap.min.css') }}"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- SB Template --}}
    {{--
    <link href="{{ asset('/sb/css/app.css') }}" rel="stylesheet" /> --}}
    <script src="sb/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    {{-- chart.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
</head>

<style>
    .myShadow {
        /* -webkit-box-shadow: 11px 23px 14px 8px rgba(0, 0, 0, 0.67);
        box-shadow: 11px 23px 14px 8px rgba(0, 0, 0, 0.67); */
        /* -webkit-box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67);
        box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67); */
        -webkit-box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
        box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
    }

    .myShadow2 {
        /* -webkit-box-shadow: 11px 23px 14px 8px rgba(0, 0, 0, 0.67);
        box-shadow: 11px 23px 14px 8px rgba(0, 0, 0, 0.67); */
        /* -webkit-box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67);
        box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67); */
        -webkit-box-shadow: 7px 4px 20px -3px #000000;
        box-shadow: 7px 4px 20px -3px #000000;
    }



    html,
    body {
        /* background-color: #B2BEB5; */
        /* background-color: #8E44AD; */
        background-color: #c186df;
        /* color: #636b6f; */
        color: gray;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .navBar {

        color: white;
    }

    .navBar:hover {

        color: white;
    }

    .icofont {
        padding: 20px;
        font-size: 30px;
        width: 30px;
        text-align: center;
        text-decoration: none;
        border-radius: 50%;
    }

    .icofont:hover {
        opacity: 0.7;
    }

    .icofont-facebook {
        background: #3B5998;
        color: white;
    }

    .Metallic-Silver {
        background: #BCC6CC
    }

    .textColor {
        color: white;
    }

    .textColor2 {
        color: #636b6f;
    }

    .form-group.required .control-label:after {
        content: "***";
        color: red;
    }



    .imgShadow {
        width: 200px;
        height: 200px;
        border: 1px solid #fff;
        /* -moz-box-shadow: 7px 7px 4px #ccc;
            -webkit-box-shadow: 7px 7px 4px #ccc;
            box-shadow: 7px 7px 4px #ccc; */
        /* -webkit-box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67);
            -moz-box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67);
            box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67); */
        -webkit-box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
        -moz-box-shadow: 11px 12px 4px 8px rgba(0, 0, 0, 0.67);
        box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
        -moz-border-radius: 20px;
        -webkit-border-radius: 20px;
        border-radius: 20px;
    }


    /* Vertical Line Css */
    .vl {
        border-left: 3px solid white;
        height: 500px;
        border-radius: 15px;
    }

    .card-border {
        border-color: #ea0164;
    }

    .alert-custom {
        background-color: rgb(27, 151, 151);
        color: white;
    }
</style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img src="/title.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    Raffle Draw
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <div class="nav-item dropdown">
                        <a id="navbarDropdown dropdownMenu1" class="nav-link dropdown-toggle navBar" href="#"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ "Menu" }}
                        </a>
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            {{-- Home --}}
                            <a class="dropdown-item" href="{{ url('/') }}">
                                <i class="fa-solid fa-house-user fa-sm " style="color: Dodgerblue;"></i>
                                {{ __('Home') }}
                            </a>
                            {{-- Winner Table --}}
                            <a class="dropdown-item" href="{{ url('/raffle-winner') }}">
                                <i class="fa-solid fa-trophy" style="color: Dodgerblue;"></i>
                                {{ __('Winner Table') }}
                            </a>
                        </ul>
                    </div>
                </div>
                {{-- End --}}

            </div>
        </nav>

        <main class="py-4">
            @yield('content_a')
        </main>
    </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="sb/js/scripts.js"></script>

    {{-- Nested Dropdown Script --}}

</body>

</html>