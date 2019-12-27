<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
<!-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="shortout icon" type="image/ico" href="{{ asset('img/favicon.ico') }}">
</head>
<body>

@yield('content')


<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 redes-sociales">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">{{ __('lang.about_us') }}</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="{{ route('aboutUs.aboutUs') }}">{{ __('lang.who_are_we') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('aboutUs.workWithUs') }}">{{ __('lang.work_with_us') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('aboutUs.invest') }}">{{ __('lang.invest_cheffy') }}</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->


            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">{{ __('lang.important_information') }}</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="{{ route('importantInfo.generalConditions') }}">{{ __('lang.general_conditions') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('importantInfo.privacyPolicy') }}">{{ __('lang.privacy_policy') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('importantInfo.frequentQuestions') }}">{{ __('lang.frequent_questions') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('importantInfo.cookiesPolicy') }}">{{ __('lang.cookies_policy') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('importantInfo.customerService') }}">{{ __('lang.cookies_policy') }}</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <hr>

    <!-- Invierte en Cheffy -->
    <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
            <h5 class="mb-1">{{ __('lang.invest_cheffy') }}</h5>
        </li>
        <li class="list-inline-item">
            <a href="{{ route('aboutUs.invest') }}" class="btn btn-danger btn-rounded">{{ __('lang.knowMore') }}</a>
        </li>
    </ul>
    <!-- Invierte en Cheffy -->

    <hr>

    <!-- Redes sociales -->
    <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1" href="https://sites.google.com/fp.uoc.edu/grupo-tourify/presentaci%C3%B3n-del-proyecto" target="_blank"><img src="{{ asset('img/icons/google-plus-3-96.png') }}" alt="">
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1" href="https://www.youtube.com/watch?v=-Fyn83okjg8&feature=youtu.be" target="_blank">
                <img src="{{ asset('img/icons/youtube-3-96.png') }}" alt="">
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1" href="https://github.com/FernandoDavidGomezOrtega/web-cheffy" target="_blank"><img src="{{ asset('img/icons/github-8-96.png') }}" alt="">
            </a>
        </li>
    </ul>
    <!-- Redes sociales -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright: Grupo Tourify - UOC
    </div>
    <!-- Copyright -->

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

</footer>

<!-- Required JavaScript Libraries -->
<script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.js') }}"></script>
<script src="https://kit.fontawesome.com/a2e8d0339c.js"></script>

<!-- principales funciones javascript de la aplicación -->
<script src="{{ asset('js/main.js') }}"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
