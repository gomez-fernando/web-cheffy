@extends('layouts.app')

@section('title')
    <title>{{ __('generalConditions.title') }}</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')
    <h1>{{ __('generalConditions.10') }}</h1>
    <h2>{{ __('generalConditions.20') }}</h2>
    <p>{{ __('generalConditions.30') }}</p>
@stop
