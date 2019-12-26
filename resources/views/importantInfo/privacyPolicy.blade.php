@extends('layouts.app')

@section('title')
    <title>{{ __('privacyPolicy.title') }}</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')
    <div class="container">
        <div class="productos">
            <h1 class="text-center">{{ __('privacyPolicy.title') }}</h1>
            <h2>{{ __('privacyPolicy.10') }}</h2>
            <p class="info-text">{{ __('privacyPolicy.20') }} <a href="https://cheffy-uoc.000webhostapp.com/">https://cheffy-uoc.000webhostapp.com</a>
                {{ __('privacyPolicy.30') }}<br><br>
                {{ __('privacyPolicy.40') }}<br><br>
                {{ __('privacyPolicy.50') }}<br><br>
                {{ __('privacyPolicy.60') }}<br><br>


            </p>
        </div>
    </div>

@stop
