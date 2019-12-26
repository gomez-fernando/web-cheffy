@extends('layouts.app')

@section('title')
    <title>{{ __('cookiesPolicy.title') }}</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')
    <div class="container">
        <div class="productos">
            <h1 class="text-center">{{ __('cookiesPolicy.title') }}</h1>
			<p>{{ __('cookiesPolicy.description_policy') }}</p>
        </div>
    </div>

@stop
