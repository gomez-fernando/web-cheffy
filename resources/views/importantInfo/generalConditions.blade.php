@extends('layouts.app')

@section('title')
    <title>{{ __('generalConditions.title') }}</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')
    <div class="container">
       <div class="productos">
           <h1>{{ __('generalConditions.10') }}</h1>
           <h2>{{ __('generalConditions.20') }}</h2>
           <p class="info-text">{{ __('generalConditions.30') }}<br>
               {{ __('generalConditions.40') }}<br>
               {{ __('generalConditions.50') }}<br>
               {{ __('generalConditions.60') }}</p>
           <h2>{{ __('generalConditions.70') }}</h2>
           <p class="info-text">{{ __('generalConditions.80') }}<br>
               {{ __('generalConditions.90') }}<br>
               &nbsp;&nbsp;&nbsp;&nbsp;{{ __('generalConditions.100') }}<br>
               &nbsp;&nbsp;&nbsp;&nbsp;{{ __('generalConditions.110') }}<br>
               &nbsp;&nbsp;&nbsp;&nbsp;{{ __('generalConditions.120') }}<br>
               {{ __('generalConditions.130') }}<br>
               {{ __('generalConditions.140') }}</p>
           <p class="info-text">{{ __('generalConditions.150') }}</p>
           <p class="info-text">{{ __('generalConditions.160') }}</p>
           <p class="info-text">{{ __('generalConditions.170') }}</p>
           <p class="info-text">{{ __('generalConditions.180') }}</p>
           <p class="info-text">{{ __('generalConditions.190') }} <a href="{{ route('importantInfo.customerService') }}">{{ __('generalConditions.200') }}</a></p>
       </div>
    </div>

@stop
