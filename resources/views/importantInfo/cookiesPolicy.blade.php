@extends('layouts.app')

@section('title')
    <title>{{ __('cookiesPolicy.title') }}</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')
    <div class="container">
        <div class="productos">
            <h1 class="text-center mb-4">{{ __('cookiesPolicy.title') }}</h1>

            <p class="info-text">{{ __('cookiesPolicy.10') }}</p> <br>
            <p class="info-text">{{ __('cookiesPolicy.20') }}</p> <br>
            <p class="info-text">{{ __('cookiesPolicy.30') }}</p>
            <ul class="ml-5">
                <li ><strong>{{ __('cookiesPolicy.40') }}</strong> <br>
                    <p class="info-text">{{ __('cookiesPolicy.50') }}</p>
                </li>
                <li ><strong>{{ __('cookiesPolicy.60') }}</strong> <br>
                    <p class="info-text">{{ __('cookiesPolicy.70') }}</p>
                </li>
            </ul>


        </div>
    </div>

@stop
