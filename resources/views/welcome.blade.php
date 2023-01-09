<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Raffle Draw</title>
    <!-- Title Logo -->
    <link rel="icon" href="/title.png" type="image/gif/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

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
    <link rel="stylesheet" type="text/css" href="{{url('/bootstrap/dist/css/bootstrap.min.css')}}"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        html,
        body {
            /* background-color: #B2BEB5; */
            /* background-color: #a49ca8; */
            /* background-color: #eefcff; */
            background-color: #8E44AD;
            /* color: #636b6f; */
            color: #FDFEFE;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            /* Animation */
            --s: 25vmin;
            --p: calc(var(--s) / 2);
            --c1: rgb(197, 27, 55);
            --c2: dodgerblue;
            --c3: white;
            --bg: var(--c3);
            --d: 4000ms;
            --e: cubic-bezier(0.76, 0, 0.24, 1);

            background-color: var(--bg);
            background-image:
                linear-gradient(45deg, var(--c1) 25%, transparent 25%),
                linear-gradient(-45deg, var(--c1) 25%, transparent 25%),
                linear-gradient(45deg, transparent 75%, var(--c2) 75%),
                linear-gradient(-45deg, transparent 75%, var(--c2) 75%);
            background-size: var(--s) var(--s);
            background-position:
                calc(var(--p) * 1) calc(var(--p) * 0),
                calc(var(--p) * -1) calc(var(--p) * 1),
                calc(var(--p) * 1) calc(var(--p) * -1),
                calc(var(--p) * -1) calc(var(--p) * 0);
            animation:
                color var(--d) var(--e) infinite,
                position var(--d) var(--e) infinite;
        }

        @keyframes color {

            0%,
            25% {
                --bg: var(--c3);
            }

            26%,
            50% {
                --bg: var(--c1);
            }

            51%,
            75% {
                --bg: var(--c3);
            }

            76%,
            100% {
                --bg: var(--c2);
            }
        }

        @keyframes position {
            0% {
                background-position:
                    calc(var(--p) * 1) calc(var(--p) * 0),
                    calc(var(--p) * -1) calc(var(--p) * 1),
                    calc(var(--p) * 1) calc(var(--p) * -1),
                    calc(var(--p) * -1) calc(var(--p) * 0);
            }

            25% {
                background-position:
                    calc(var(--p) * 1) calc(var(--p) * 4),
                    calc(var(--p) * -1) calc(var(--p) * 5),
                    calc(var(--p) * 1) calc(var(--p) * 3),
                    calc(var(--p) * -1) calc(var(--p) * 4);
            }

            50% {
                background-position:
                    calc(var(--p) * 3) calc(var(--p) * 8),
                    calc(var(--p) * -3) calc(var(--p) * 9),
                    calc(var(--p) * 2) calc(var(--p) * 7),
                    calc(var(--p) * -2) calc(var(--p) * 8);
            }

            75% {
                background-position:
                    calc(var(--p) * 3) calc(var(--p) * 12),
                    calc(var(--p) * -3) calc(var(--p) * 13),
                    calc(var(--p) * 2) calc(var(--p) * 11),
                    calc(var(--p) * -2) calc(var(--p) * 12);
            }

            100% {
                background-position:
                    calc(var(--p) * 5) calc(var(--p) * 16),
                    calc(var(--p) * -5) calc(var(--p) * 17),
                    calc(var(--p) * 5) calc(var(--p) * 15),
                    calc(var(--p) * -5) calc(var(--p) * 16);
            }
        }

        @media (prefers-reduced-motion) {
            body {
                animation: none;
            }


        }



        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            margin: 5px;
            -webkit-box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
            box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
            background-color: white;
            color: black;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
            /* margin-bottom: 40px; */
        }

        .btn-success {
            background-color: #1f9978;
            /* display: inline-block; */
            transition: 0.5s;
            color: white;
            font-size: 20px;
            font-weight: bold;
            -webkit-box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
            box-shadow: 5px 10px 12px 1px rgba(0, 0, 0, 0.47);
        }

        .btn-success:hover {
            background-color: #F1948A;
            color: white;
        }

        .imgShadow {
            width: 200px;
            height: 200px;
            border: 2px solid #fff;
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
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="container">
                <img class="imgShadow" src="{{url('/tk.jpg')}}" alt="" width="200" height="200">
                <img class="imgShadow " src="{{url('/rf.jpg')}}" alt="" width="200" height="200">
            </div>
            <div class="text-center title m-b-md mt-4">
                <h1 class=""><b> <img src="{{url('/title.png')}}" alt=""> Buy
                        Tickets & Win Prizes <img src="{{url('/title.png')}}" alt=""></b></h1>
                <h2 class=""><b> <img src="{{url('/title.png')}}" alt=""> Tickets Prize only 20Tk <img
                            src="{{url('/title.png')}}" alt=""></b></h2>
            </div>



            <div class="links">
                <a href="{{ route('raffle.index') }}"><button type="button" class="btn btn-success btn-lg btn-block"> <i
                            class="fa-solid fa-pen-ruler" style="color: blue"></i> Raffle Draw
                        Entry
                    </button></a>
            </div>
            <div class="links ">
                <a href="{{ route('draw.index') }}"><button type="button" class="btn btn-success  btn-lg btn-block"> <i
                            class="fa-solid fa-dice-d20" style="color: red"></i> Draw
                    </button></a>
            </div>
            <!-- Footer -->
            <div class="contianer-fluid fixed-bottom ">
                <!-- Copyright -->
                <div class="row justify-content-center footer text-center p-1"
                    style="background-color: #007bff; color:white;">
                    <div class="offset-md-2 col-md-8 col-sm-10 col-10">
                        © 2021 Copyright:
                        <a class="text-reset fw-bold" style="color: white" href="http://www.shuvoafjalme.cf/">Shuvo
                            Afjal</a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-2">
                        <a class="text-reset fw-bold" style="color: white" href="{{url('version')}}">v:1.0</a>
                    </div>

                </div>
                <!-- Copyright -->
            </div>
        </div>

        <!-- js -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
</body>

</html>