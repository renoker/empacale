@extends('layouts.main')
@section('title', 'Maruchan - Recuperar contraseña')
@section('back', 'back_olvide_contrasenia')

@section('content')
    <div class="content_olvide_contrasenia">
        <div class="cont_imgen_titulo">
            <img src="{{ url('assets/images/olvide_contrasenia/titulo.png') }}" class="img_titulo" alt="">
            <h6 class="texto_small">Ingresa tu nueva contraseña</h6>
            </h6>
            <div class="cont_from_registro">
                <form action="{{ route('user.password_reset_complete') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="input-container">
                        <input type="hidden" name="token" value="{{ $password_reset->token }}">
                        <input type="password" id="password" name="password" placeholder="Contraseña">
                    </div>

                    <div class="cont_button">
                        <input type="image" src="{{ url('assets/images/registro/boton.png') }}" alt="Enviar"
                            class="btn_image">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
,
