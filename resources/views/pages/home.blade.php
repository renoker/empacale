@extends('layouts.main')
@section('title', 'Maruchan - Home')
@section('back', 'back_home')

@section('content')
    <div class="content_home">
        <div class="contenedor_banner">
            <div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @if ($week && $week->id == 1)
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/home/PLAYA.gif') }}" class="img_gif" alt="">
                            </li>
                        @elseif($week && $week->id == 2)
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/home/pueblo.gif') }}" class="img_gif" alt="">
                            </li>
                        @elseif($week && $week->id == 3)
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/home/gif_montana.gif') }}" class="img_gif" alt="">
                            </li>
                        @elseif($week && $week->id == 4)
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/home/gif_ciudad.gif') }}" class="img_gif" alt="">
                            </li>
                        @else
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/home/pueblo.gif') }}" class="img_gif" alt="">
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="content_btn_registro">
                <a href="{{ route('user.registro') }}">
                    <img src="{{ url('assets/images/home/botonregistro.png') }}" class="btn_registro" alt="">
                </a>
            </div>
        </div>
        <div class="back_to_home">
            <div class="content_video">
                <img src="{{ url('assets/images/home/mecanica.png') }}" class="icon_mecanica" alt="">
                <div class="content_video_back">
                    <iframe class="iframe" src="https://www.youtube.com/embed/T7hU-dG7nk0?si=LjP2fan_d9DwO0ev&amp;start=1"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
            <div class="content_steps">
                <div class="items">
                    <img src="{{ url('assets/images/home/1.png') }}" class="img_step" alt="">
                    <p class="text">Registra el código de lote de cualquier producto de la Familia Maruchan para jugar a
                        Empácale con Maruchan y convertirte en uno de nuestros 3 ganadores cada semana. Cada código de LOTE
                        registrado te dará una sesión con 3 vidas para jugar. Cuantos más códigos registres, más
                        oportunidades tendrás de mejorar tu tiempo y aumentar tu puntaje. </p>
                </div>
                <div class="items">
                    <img src="{{ url('assets/images/home/2_new.png') }}" class="img_step" alt="">
                    <p class="text">En la parte inferior de la pantalla tendrás una maleta a la que tendrás que arrastrar
                        todos los objetos de la lista del destino de cada semana. Cada objeto te sumará 5 puntos.</p>
                </div>
                <div class="items">
                    <img src="{{ url('assets/images/home/3.png') }}" class="img_step" alt="">
                    <p class="text">Los productos de la familia Maruchan dorados te sumarán mayor puntaje, pero si te
                        equivocas y empacas objetos erróneos, te restarán puntos. ¡Cuidado! Si empacas 3 objetos erróneos
                        será GAME OVER y perderás una vida.</p>
                </div>
                <div class="items">
                    <img src="{{ url('assets/images/home/4.png') }}" class="img_step" alt="">
                    <p class="text">Acumula la mayor cantidad de puntos empacando tu maleta en el menor tiempo posible, si
                        eres de los 3 mejores de la semana, ¡ya ganaste increíbles premios!</p>
                </div>
            </div>
            <div class="content_premios">
                <img src="{{ url('assets/images/home/premios.png') }}" class="icon_premios" alt="">
                <h6 class="h6">Imágenes de carácter ilustrativo</h6>
                <h6 class="texto">¿Qué te falta para llenar tu maleta?</h6>
                <h6 class="texto_small">¡Exacto, premios! Si eres de los 3 puntajes más altos en el menor tiempo de cada
                    semana puedes llevarte uno de estos premios. (Si ya ganaste, no podrás volver a ganar).</h6>
                <div class="contenedor_imagenes_premios">
                    <img src="{{ url('assets/images/home/polaroid1.png') }}" class="premio_1" alt="">
                    <img src="{{ url('assets/images/home/polaroid2.png') }}" class="premio_2" alt="">
                    <img src="{{ url('assets/images/home/polaroid3_new.png') }}" class="premio_3" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @vite('resources/js/home.js')
@endsection
