@extends('layouts.app')

@section('title')
<title>{{ __('customerService.title') }}</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')
<div class="container">
    <div class="productos">
        <h1 class="text-center mb-3">{{ __('customerService.title') }}</h1>
        <p class="info-text">{{ __('customerService.10') }}</p> <br>

        <span class="anchor" id="contact_form"></span>
        <section class="contacto row justify-content-center">
            <div class="col-12 col-md-9 text-center">
                <h2 class="subtitulo"><span>{{ __('lang.contact_form') }}</span></h2>
            </div>
            <div class="col-sm-9 col-12 col-md-4 text-center">
                {{-- // mostramos mensaje --}}
                @include('includes.message')
                <form action="{{ route('customerServiceForm') }}" method="POST" id="contactForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('lang.name') }}</label>
                        <input type="text" class="form-control" id="name" aria-describedby="your name" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="surname">{{ __('lang.surname') }}</label>
                        <input type="text" class="form-control" id="surname" aria-describedby="your surname" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('lang.email') }}</label>
                        <input type="email" class="form-control" id="email" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="text">{{ __('lang.message') }}</label>
                        <textarea name="text" id="text" class="form-control" rows="5" cols="80" required></textarea>
                    </div>
                    <button type="submit" class="submit-form">{{ __('lang.send') }}</button>
                </form>

            </div>
        </section>


    </div>
</div>

@stop
