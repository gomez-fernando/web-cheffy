@extends('layouts.app')

@section('title')
    <title>{{ __('frequentQuestions.title') }}</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')
    <div class="container">
        <div class="productos">
            <h1 class="text-center mb-3">{{ __('frequentQuestions.title') }}</h1>

            <h4>{{ __('frequentQuestions.10') }}</h4>
            <p class="info-text">{{ __('frequentQuestions.20') }}</p> <br>

            <h4>{{ __('frequentQuestions.30') }}</h4>
            <p class="info-text">{{ __('frequentQuestions.40') }}</p> <br>
        </div>
    </div>

@stop
