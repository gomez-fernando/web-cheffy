<nav class="navbar navbar-expand-lg navbar-light  menu" id="menu">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('welcome') }}">{{ __('lang.home') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ $_ENV['APP_URL'] }}/#services">{{ __('lang.services') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ $_ENV['APP_URL'] }}/#contact_form">{{ __('lang.contact') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ $_ENV['APP_URL'] }}/#where_are_we">{{ __('lang.where_are_we') }}</a>
            </li>
            <li class="nav-item">
                <a href="locale/en" class="nav-link"><img src="{{ asset('img/icons/uk_flag.png') }}" alt=""></a>
            </li>
            <li class="nav-item">
                <a href="locale/es" class="nav-link"><img src="{{ asset('img/icons/spain_flag.png') }}" alt=""></a>
            </li>
        </ul>
    </div>
</nav>
