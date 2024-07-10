@extends('layouts.main')
@section('title', 'Maruchan - Home')
@section('back', 'back_home')

@section('content')
    <div class="content_home">
        <div class="contenedor_banner">
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <img src="{{ url('assets/images/home/PLAYA.gif') }}" class="img_gif" alt="">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="content_btn_registro">
                <a href="">
                    <img src="{{ url('assets/images/home/botonregistro.png') }}" class="btn_registro" alt="">
                </a>
            </div>
        </div>
        <div class="back_to_home">
            <div class="content_video">
                <img src="{{ url('assets/images/home/mecanica.png') }}" class="icon_mecanica" alt="">
                <div class="content_video_back"></div>
            </div>
            <div class="content_steps">
                <div class="items">
                    <img src="{{ url('assets/images/home/1.png') }}" class="img_step" alt="">
                    <p class="text">Lorem ipsum sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dorore mafna aliqua.</p>
                </div>
                <div class="items">
                    <img src="{{ url('assets/images/home/2.png') }}" class="img_step" alt="">
                    <p class="text">Lorem ipsum sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dorore mafna aliqua.</p>
                </div>
                <div class="items">
                    <img src="{{ url('assets/images/home/3.png') }}" class="img_step" alt="">
                    <p class="text">Lorem ipsum sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dorore mafna aliqua.</p>
                </div>
                <div class="items">
                    <img src="{{ url('assets/images/home/4.png') }}" class="img_step" alt="">
                    <p class="text">Lorem ipsum sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dorore mafna aliqua.</p>
                </div>
            </div>
            <div class="content_premios">
                <img src="{{ url('assets/images/home/premios.png') }}" class="icon_premios" alt="">
                <h6 class="h6">Imágenes de carácter ilustrativo</h6>
                <h6 class="texto">Lorem ipson, Lorem ipson, Lorem ipson, Lorem ipson, Lorem ipson,</h6>
                <div class="contenedor_imagenes_premios">
                    <img src="{{ url('assets/images/home/polaroid1.png') }}" class="premio_1" alt="">
                    <img src="{{ url('assets/images/home/polaroid2.png') }}" class="premio_2" alt="">
                    <img src="{{ url('assets/images/home/polaroid3.png') }}" class="premio_3" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @vite('resources/js/home.js')
@endsection
