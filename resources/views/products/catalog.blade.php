@extends('layouts.app')

@section('title')
    <title>{{ __('lang.210') }}</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')

    <main class="container">

        <span class="anchor" id="services"></span>
        <div class="row productos">
            <article class="col-12 text-center">
                <h2 class="subtitulo"><span>{{ __('lang.we_provide') }}</span></h2>
                <p class="titulo">{{ __('lang.our_products') }}</p>
                <p>{{ __('catalog.10') }}</p>
                <p>{{ __('catalog.20') }}</p>
                <p>{{ __('catalog.30') }}</p>
            </article>

            <div class="col-md-6 col-12">
                <div class="row justify-content-center">
                    <article class="col-12   py-1">
                        <a href="{{ route('products.product1') }}">
                            <figure class="producto">
                                <img src="{{ asset('img/products/pr-1.jpg') }}" class="img-fluid" alt="">
                                <figcaption class="overlay">
                                    <p class="overlay-texto">{{ __('catalog.40') }}</p>
                                </figcaption>
                            </figure>
                        </a>
                    </article>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="row justify-content-center">
                    <article class="col-12 py-1">
                        <a href="{{ route('products.product2') }}">
                            <figure class="producto">
                                <img src="{{ asset('img/products/pr-2.jpg') }}" class="img-fluid" alt="">
                                <figcaption class="overlay">
                                    <p class="overlay-texto">{{ __('catalog.50') }}</p>
                                </figcaption>
                            </figure>
                        </a>
                    </article>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="row justify-content-center">
                    <article class="col-12 py-1">
                        <a href="{{ route('products.product3') }}">
                            <figure class="producto">
                                <img src="{{ asset('img/products/pr-3.jpg') }}" class="img-fluid" alt="">
                                <figcaption class="overlay">
                                    <p class="overlay-texto">{{ __('catalog.60') }}</p>
                                </figcaption>
                            </figure>
                        </a>
                    </article>
                </div>
            </div>

            <div class="col-md-6 col-12">
                <div class="row justify-content-center">
                    <article class="col-12 py-1">
                        <a href="{{ route('products.product4') }}">
                            <figure class="producto">
                                <img src="{{ asset('img/products/pr-4.jpg') }}" class="img-fluid" alt="">
                                <figcaption class="overlay">
                                    <p class="overlay-texto">{{ __('catalog.70') }}</p>
                                </figcaption>
                            </figure>
                        </a>
                    </article>
                </div>
            </div>

        </div>
    </main>

@stop
