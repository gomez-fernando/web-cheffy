@extends('layouts.app')

@section('title')
    <title>{{ __('aboutUs.10') }}</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')
    <main class="container">
        <div class="productos">
            <div class="row justify-content-center mb-3">
                <h1 >{{ __('aboutUs.10') }}</h1>
            </div>
            <div class="row  justify-content-center">
                <figure>
                    <img src="{{ asset('img/logo.png') }}" class="in-page-cheffy-logo" alt="">
                </figure>
            </div>
            <div class="row justify-content-center px-5 ">
                <p class="info-text">{{ __('aboutUs.20') }}</p>
                <p class="info-text">{{ __('aboutUs.30') }}</p>
                <p class="info-text">{{ __('aboutUs.40') }}</p>
            </div>

        </div>



    </main>
@stop
