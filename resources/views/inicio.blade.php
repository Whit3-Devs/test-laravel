<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <title>Vida Digital Test</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- Company´s Presentation -->
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    <header  class="container-presentation" style="background: url('{{ asset('assets/VD-SLIDERTEST.png')}}') top/100% fixed; ">
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

        <div class="intro-body">
            <h1 id="titulo">TE GUIAMOS HACIA LA TRANSFORMACIÓN DIGITAL.</h1>
            <h3>CONTRUCCIÓN DE SERVICIOS PARA EL MUNDO DE HOY.</h3>
        </div>
    </header>

    <!-- Stack Technologies -->
    <section class="container-stackTechnologies">

        <div class="container-filterCards">

            <ul class="filter-cards" id="filter-cards">
                <li>
                    <a class="filter-link hover" href="#" id="dev-web">Desarrollo Web</a>
                </li>
                <li>
                    <a class="filter-link active" href="#" id="dev-movil">Desarrollo Móvil</a>
                </li>
                <li>
                    <a class="filter-link hover" href="#" id="dev-api">API S</a>
                </li>
            </ul>

            <div class="container-cards" id="container-cards">



            </div>

        </div>

    </section>

    <!-- Company´s Pitch -->
    <div class="container-pitch" style="background: url('{{ asset('assets/VD-SLIDERTEST.png')}}') top/100% fixed; ">
        <h1>Brindamos soluciones a medida.</h1>
        <h5>Entendemos que cada organización es compleja y única por lo que nos comprometemos al 100% con cada proyecto.</h5>
        <a class="btn-unete" href="">ÚNETE AL TEAM</a>
    </div>

    <!-- Company´s Footer -->
    <footer class="container-footer">
        <div class="container-copyright">
            <p>&copy; 2021. Todos los derechos reservados</p>
        </div>
        <div class="container-footerPages">
            <a href="#">Home</a>
            <a href="#">Login</a>
        </div>
        <div class="container-footerButtons">
            <a href="#"><img class="footer-svgImage" src="{{asset('svg/facebook-gris.svg') }}" alt=""></a>
            <a href="#"><img class="footer-svgImage" src="{{asset('svg/twitter-gris.svg') }}" alt=""></a>
            <a href="#"><img class="footer-svgImage" src="{{asset('svg/google-plus-gris.svg') }}" alt=""></a>
            <a href="#"><img class="footer-svgImage" src="{{asset('svg/github-gris.svg') }}" alt=""></a>
            <a href="#"><img class="footer-svgImage" src="{{asset('svg/linkedin-gris.svg') }}" alt=""></a>
        </div>
    </footer>

    <script src="{{URL::asset('js/filter.js') }}"></script>
</body>
</html>