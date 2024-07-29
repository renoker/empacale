@extends('layouts.main')
@section('title', 'Maruchan - Mi Perfil')
@section('back', 'back_perfil')

@section('content')
    <div class="content_perfil">
        <div class="cont_imgen_titulo">
            <img src="{{ url('assets/images/mi_perfil/titulo_new.png') }}" class="img_titulo" alt="">
            <h6 class="texto">¡VAMOS POR LOS PREMIOS!</h6>
            <h6 class="texto_small">Prepárate para arrastrar los 16 objetos que te pediremos al iniciar el juego, cada uno te
                sumará 5 puntos ¡MUCHO CUIDADO con los objetos erróneos porque te restarán 5 puntos cada uno! y si empacas 3
                será GAME OVER. Abre bien los ojos y ponte buzo para atrapar los productos Maruchan dorados, ¡esos te dan
                puntos extras!
            </h6>
        </div>
        <div class="content_title">
            <img src="{{ url('assets/images/mi_perfil/titulo.png') }}" class="titulo" alt="">
        </div>
        <div class="cont">
            <div class="cont_detalle">
                <div class="cont_cuadros">
                    <div class="cont_informacion">
                        <h1 class="h1">{{ $user->name }}</h1>
                        <div class="content_blanco">
                            <p class="text">TU MEJOR PUNTAJE: {{ $score->score ?? 0 }}</p>
                        </div>
                        <div class="content_blanco">
                            <p class="text">VIDAS: {{ $vidas }}</p>
                        </div>
                        {{-- @if ($vidas > 0)
                            <div class="content_button">
                                <a href="{{ route('game.index') }}">
                                    <img src="{{ url('assets/images/mi_perfil/jugar.png') }}" alt="">
                                </a>
                            </div>
                        @else
                            <div class="content_button pt">
                                <h6 class="texto">¿Crees poder mejorar tu puntaje en menor tiempo?</h6>
                                <h6 class="texto_small">Registra otro código LOTE de cualquier producto de la Familia
                                    Maruchan y
                                    obtén 3 vidas extras para jugar</h6>
                                <a href="{{ route('participation.create') }}">
                                    <img src="{{ url('assets/images/mi_perfil/lote.png') }}" alt="">
                                </a>
                            </div>
                        @endif --}}
                    </div>
                </div>
            </div>
            <div class="cont_instrucciones">
                <div class="cont">
                    <div class="item">
                        <img src="{{ url('assets/images/mi_perfil/1.png') }}" alt="" class="img_item">
                        <h6 class="txt">Registra el código de lote de cualquier producto de la Familia Maruchan para
                            jugar a Empácale con Maruchan y convertirte en uno de nuestros ganadores. Cada código LOTE
                            registrado te dará una sesión con 3 vidas para jugar. Cuantos más códigos registres, más
                            oportunidades tendrás de mejorar tu tiempo y aumentar tu puntaje. Los puntos acumulados
                            corresponden a cada vida, no se acumulan al usar las 3 vidas.</h6>
                    </div>
                    <div class="item">
                        <img src="{{ url('assets/images/mi_perfil/2.png') }}" alt="" class="img_item">
                        <h6 class="txt">En la parte inferior de la pantalla tendrás una maleta a la que tendrás que
                            arrastrar todos los objetos de la lista al destino de cada semana. Cada objeto te sumará 5
                            puntos.</h6>
                    </div>
                    <div class="item">
                        <img src="{{ url('assets/images/mi_perfil/3.png') }}" alt="" class="img_item">
                        <h6 class="txt">Los productos de la Familia Maruchan dorados te sumarán mayor puntaje, pero si te
                            equivocas y empacas objetos erróneos, se te restarán puntos. ¡Cuidado! Si empacas 3 objetos
                            erróneos será GAME OVER y perderás una vida.</h6>
                    </div>
                    <div class="item">
                        <img src="{{ url('assets/images/mi_perfil/4.png') }}" alt="" class="img_item">
                        <h6 class="txt">Acumula la mayor cantidad de puntos empacando tu maleta en el menor tiempo
                            posible, si eres de los 3 mejores de la semana, ¡ya ganaste increíbles premios!</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
