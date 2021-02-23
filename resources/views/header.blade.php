<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <title>Vida Digital Test</title>
    <link href="{{ asset('css/header.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- Company´s Presentation -->
    <header  class="container-presentation">
        <nav class="container-nav">
            <a class="logo-VD" href="#">
                <img src="{{ asset('assets/Logo6.png') }}" alt="">
            </a>
            <ul class="nav-pages">
                <li>
                    <a href="{{ url('/') }}">HOME</a>
                </li>

                <li>
                    <a href="{{ route('login') }}">LOGIN</a>
                </li>
            </ul>
        </nav>
    </header>