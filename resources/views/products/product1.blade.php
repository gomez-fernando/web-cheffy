@extends('layouts.app')

@section('title')
    <title>Viajes personalizados</title>
@endsection

{{-- // mostramos navbar --}}
@include('includes.navbarHome')

@section('content')

    <main class="container">

        <span class="anchor" id="services"></span>
        <div class="row productos">
            <article class="col-12 text-center">
                <h2 class="subtitulo"><span>{{ __('descubre tu próxima experiencia') }}</span></h2>
                <p class="titulo">{{ __('PRODUCTO 1') }}</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit veniam saepe cum aspernatur neque odit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae deserunt perferendis. Lorem ipsum dolor sit amet consectetur.</p>
            </article>

            <!-- <div class="col-md-6 col-12"> -->
            <div class="row justify-content-center">
                <article class="col-12 col-md-6   py-1">
                    <figure class="producto">
                        <img src="img/products/pr-1.jpg" class="img-fluid" alt="">

                    </figure>
                </article>
                <!-- </div> -->
            </div>
            <article class="col-12 text-center">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit veniam saepe cum aspernatur neque odit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae deserunt perferendis. Lorem ipsum dolor sit amet consectetur.</p>
            </article>

        </div>
    </main>

@stop
