@extends('layouts.app')

@section('title')
<title>{{ __('customerService.title') }}</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')
<div class="container">
    <div class="productos">
        <h1 class="text-center">{{ __('customerService.title') }}</h1>

    </div>
</div>

@stop
