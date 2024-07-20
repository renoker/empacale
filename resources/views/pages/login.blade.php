@extends('layouts.main')
@section('title', 'Maruchan - Login')
@section('back', 'back_login')

@section('content')
    <div class="content_login">
        <div class="cont_imgen_titulo">
            <img src="{{ url('assets/images/login/titulo.png') }}" class="img_titulo" alt="">
        </div>
        <div class="cont">
            <div class="cont_from_registro">
                <form action="{{ route('user.login') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="input-container">
                        <input type="email" id="email" name="email" placeholder="Correo electrónico">
                    </div>
                    <div class="input-container">
                        <input placeholder="Contraseña" type="password" name="password" id="password">
                    </div>
                    <div class="conten_contrasenia">
                        <a href="{{ route('user.olvide_contrasenia') }}">
                            Olvidé mi contraseña
                        </a>
                        <a href="{{ route('user.registro') }}">
                            No tengo cuenta aún
                        </a>
                    </div>
                    <div class="cont_button">
                        <input type="image" src="{{ url('assets/images/registro/boton.png') }}" alt="Enviar"
                            class="btn_image">
                    </div>
                </form>
            </div>
            <div class="cont_imagen_ilustrativa">
                <div class="items">
                    <img src="{{ url('assets/images/home/1.png') }}" class="img_step" alt="">
                    <p class="text">Registra el código de lote de cualquier producto de la Familia Maruchan para jugar a
                        Empácale con Maruchan y convertirte en uno de nuestros ganadores. Cada código LOTE registrado te
                        dará una sesión con 3 vidas para jugar. Cuantos más códigos registres, más oportunidades tendrás de
                        mejorar tu tiempo y aumentar tu puntaje. Los puntos acumulados corresponden a cada vida, no se
                        acumulan al usar las 3 vidas.</p>
                </div>
                <div class="items">
                    <img src="{{ url('assets/images/home/2_new.png') }}" class="img_step" alt="">
                    <p class="text">En la parte inferior de la pantalla tendrás una maleta a la que tendrás que arrastrar
                        todos los objetos de la lista al destino de cada semana. Cada objeto te sumará 5 puntos.</p>
                </div>
                <div class="items">
                    <img src="{{ url('assets/images/home/3.png') }}" class="img_step" alt="">
                    <p class="text">Los productos de la Familia Maruchan dorados te sumarán mayor puntaje, pero si te
                        equivocas y empacas objetos erróneos, se te restarán puntos. ¡Cuidado! Si empacas 3 objetos erróneos
                        será GAME OVER y perderás una vida.</p>
                </div>
                <div class="items">
                    <img src="{{ url('assets/images/home/4.png') }}" class="img_step" alt="">
                    <p class="text">Acumula la mayor cantidad de puntos empacando tu maleta en el menor tiempo posible, si
                        eres de los 3 mejores de la semana, ¡ya ganaste increíbles premios!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
