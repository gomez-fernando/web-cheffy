@extends('layouts.app')

@section('title')
    <title>Cheffy</title>
@endsection

{{-- // mostramos portada --}}
@include('includes.portada')

{{-- // mostramos navbar --}}
@include('includes.navbarAboutAs')



@section('content')
    <main class="container">
        <span class="anchor" id="about_us"></span>
        <div class="row nosotros justify-content-center">
            <div class="col-12 text-center">
                <h2 class="subtitulo"><span>{{ __('lang.who_are_we') }}</span></h2>
                <h3 class="titulo">{{ __('lang.our_passion') }}</h3>
                <p>{{ __('lang.text_1') }}</p>
                <a href="{{ route('products.catalog') }}" class="enlace">{{ __('lang.discover') }}</a>
            </div>
        </div>

        <span class="anchor" id="services"></span>
        <div class="row productos">
            <article class="col-12 text-center">
                <h2 class="subtitulo"><span>{{ __('lang.we_provide') }}</span></h2>
                <p class="titulo">{{ __('lang.our_products') }}</p>
                <p>{{ __('lang.our_products_description') }}</p>
            </article>

            {{--			<div class="col-12">--}}


            <div class="row justify-content-center">
                <article class="col-12 col-lg-6 py-1">
                    <a href="{{ route('products.product1') }}">
                        <figure class="producto">
                            <img src="img/products/pr-1.jpg" class="img-fluid" alt="">
                            <figcaption class="overlay">
                                <p class="overlay-viajes-personalizados">
                                    {{ __('lang.product1_tittle') }}
                                </p>
                            </figcaption>
                        </figure>
                    </a>
                </article>
            </div>

            <div class="row justify-content-center">
                <article class="col-6 col-lg-3 py-1">
                    <a href="{{ route('products.product2') }}">
                        <figure class="producto">
                            <img src="img/products/pr-2.jpg" class="img-fluid" alt="">
                            <figcaption class="overlay">
                                <p class="overlay-texto">{{ __('lang.product2_tittle') }}</p>
                            </figcaption>
                        </figure>
                    </a>
                </article>

                <article class="col-6 col-lg-3 py-1">
                    <a href="{{ route('products.product3') }}">
                        <figure class="producto">
                            <img src="img/products/pr-3.jpg" class="img-fluid" alt="">
                            <figcaption class="overlay">
                                <p class="overlay-texto">{{ __('lang.product3_tittle') }}</p>
                            </figcaption>
                        </figure>
                    </a>
                </article>

                <article class="col-6 col-lg-3 py-1">
                    <a href="{{ route('products.product4') }}">
                        <figure class="producto">
                            <img src="img/products/pr-4.jpg" class="img-fluid" alt="">
                            <figcaption class="overlay">
                                <p class="overlay-texto">{{ __('lang.product4_tittle') }}</p>
                            </figcaption>
                        </figure>
                    </a>
                </article>

            </div>
            <a class="d-block btn-productos mx-auto" href="{{ route('products.catalog') }}" class="enlace">{{ __('lang.all_products') }}</a>
        </div>
        {{--		</div>--}}
    </main>

    <div id="carousel" class="carousel slide carousel-fade mb-5" data-ride="carousel" data-pause="false"  data-interval="3000">
        <a href="{{ route('aboutUs.invest') }}">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/profits.png" alt="">
                    <div class="carousel-caption d-none d-md-block " >
                        <h3>{{ __('lang.inversion') }}</h3>
                        <h4>{{ __('lang.invest_our') }}</h4>
                    </div>
                    <div class="carousel-caption  d-xs-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/invest.png" alt="">
                    <div class="carousel-caption d-none d-md-block ">
                        <h3>{{ __('lang.inversion') }}</h3>
                        <h4>{{ __('lang.invest_our') }}</h4>
                    </div>
                    <div class="carousel-caption  d-xs-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/strategy.png" alt="">
                    <div class="carousel-caption d-none d-md-block ">
                        <h3>{{ __('lang.inversion') }}</h3>
                        <h4>{{ __('lang.invest_our') }}</h4>
                    </div>
                    <div class="carousel-caption  d-xs-block">
                    </div>
                </div>

            </div>
        </a>
    </div>
    <div class="container">
        <div class="row acerca-de justify-content-around">
            <article class="col-10 col-sm-5">
                <figure class="text-center">
                    <img src="img/icons/icon-team.png" alt="">
                    <figcaption>
                        <p>
                            <strong class="mb-2">{{ __('lang.experts') }}</strong></p>
                        <div class="w-100"></div>
                        <p>
                        {{ __('lang.team_made_up') }}
                        </p>
                    </figcaption>
                </figure>
            </article>

            <article class="col-10 col-sm-5">
                <figure class="text-center">
                    <img src="img/icons/icon-services.png" alt="">
                    <figcaption>
                        <p>
                            <strong class="mb-2">{{ __('lang.commitment') }}</strong>
                        </p>
                        <div class="w-100"></div>
                        <p>
                        {{ __('lang.commitment_services') }}
                        </p>
                    </figcaption>
                </figure>
            </article>
        </div>
    </div>

    <div class="container-fluid px-0 galeria">
        <div class="row justify-content-center mx-0 px-0">
            <div class="col-4 px-0 mx-0">
                <img src="img/display/dp-cocina.jpg" alt="">
            </div>
            <div class="col-4 px-0 mx-0">
                <img src="img/display/dp-sala.jpg" alt="">
            </div>
            <div class="col-4 px-0 mx-0">
                <img src="img/display/dp-cheers.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="container" id="">

        <span class="anchor" id="contact_form"></span>
        <section class="contacto row justify-content-center">
            <div class="col-12 col-md-9 text-center">
                <h2 class="subtitulo"><span>{{ __('lang.contact_form') }}</span></h2>
            </div>
            <div class="col-sm-9 col-12 col-md-4 text-center">
                {{-- // mostramos mensaje --}}
                @include('includes.message')
                <form action="{{ route('contactForm') }}" method="POST" id="contactForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('lang.name') }}</label>
                        <input type="text" class="form-control" id="name" aria-describedby="your name" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="surname">{{ __('lang.surname') }}</label>
                        <input type="text" class="form-control" id="surname" aria-describedby="your surname" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('lang.email') }}</label>
                        <input type="email" class="form-control" id="email" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="text">{{ __('lang.message') }}</label>
                        <textarea name="text" id="text" class="form-control" rows="5" cols="80" required></textarea>
                    </div>
                    <button type="submit" class="submit-form">{{ __('lang.send') }}</button>
                </form>

            </div>
        </section>

        <span class="anchor" id="where_are_we"></span>
        <section class="contacto row justify-content-center">
            <div class="col-12 col-md-9 text-center">
                <h2 class="subtitulo"><span>{{ __('lang.where_are_we') }}</span></h2>
            </div>
            <iframe class="col-12 col-md-9" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d476.7119334860765!2d-4.896319086452246!3d36.50772444651502!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7328004cc908d7%3A0x3da5567adbd7a362!2sLos%20Mellizos%20Marbella!5e0!3m2!1ses!2ses!4v1575458614385!5m2!1ses!2ses" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

            <div class="w-100 mb-4"></div>
            <div class="w-100 mb-4"></div>
            <div>
                <p class="border-bottom border-top">
                    <img src="img/icons/icon-location-64.png" alt="">Paseo Marítimo, 8, 29602 Marbella
                </p>
            </div>
            <div class="w-100 mb-4"></div>
            <div>
                <p class="border-bottom border-top">
                    <img src="img/icons/mobile-phone-8-64.png" alt="">+34 653 891 672
                </p>
            </div>
            <div class="w-100 mb-4"></div>
            <div>
                <p class="border-bottom border-top">
                    <img src="img/icons/inbox-8-64.png" alt="">&nbsp; info@cheffy.com
                </p>
            </div>
        </section>
    </div>
@stop


