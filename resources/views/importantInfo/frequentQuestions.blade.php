@extends('layouts.app')

@section('title')
    <title>{{ __('frequentQuestions.title') }}</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')
    <div class="container">
        <div class="productos">
            <h1 class="text-center">{{ __('frequentQuestions.title') }}</h1>

        </div>
    </div>

@stop
