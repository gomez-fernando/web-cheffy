@extends('layouts.app')

@section('title')
    <title>{{ __('invest.10') }}</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')
    <main class="container">
        <div class="productos">
            <div class="row justify-content-center mb-3">
                <h1 >{{ __('invest.10') }}</h1>
            </div>
            <div class="row  justify-content-center">
                <figure>
                    <img src="{{ asset('img/profits.png') }}" class="in-page-cheffy-logo" alt="">
                </figure>
            </div>
            <div class="row justify-content-center px-5 ">
                <p class="info-text">{{ __('invest.20') }}</p>
                <p class="info-text">{{ __('invest.30') }}</p>
                <p class="info-text">{{ __('invest.40') }}</p>
            </div>

            <span class="anchor" id="contact_form"></span>
            <section class="contacto row justify-content-center">
                <div class="col-12 col-md-9 text-center">
                    <h2 class="subtitulo"><span>{{ __('invest.30') }}</span></h2>
                </div>
                <div class="col-sm-9 col-12 col-md-4 text-center">
                    {{-- // mostramos mensaje --}}
                    @include('includes.message')
                    <form action="{{ route('investInCheffy') }}" method="POST" id="contactForm">
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

        </div>



    </main>
@stop
