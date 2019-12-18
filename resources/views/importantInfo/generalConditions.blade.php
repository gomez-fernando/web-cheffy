@extends('layouts.app')

@section('title')
    <title>{{ __('generalConditions.title') }}</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')
    <p>{{ __('generalConditions.10') }}</p>
    <p>{{ __('generalConditions.20') }}</p>
    <p>{{ __('generalConditions.30') }}</p>
@stop
