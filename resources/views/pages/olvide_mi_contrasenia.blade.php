@extends('layouts.main')
@section('title', 'Maruchan - thank you page')
@section('back', 'back_olvide_contrasenia')

@section('content')
    <div class="content_olvide_contrasenia">
        <div class="cont_imgen_titulo">
            <img src="{{ url('assets/images/olvide_contrasenia/titulo.png') }}" class="img_titulo" alt="">
            <h6 class="texto_small">Ingresa tu correo electrónico para poder enviarte una liga para restablecer tu contraseña
            </h6>
            <div class="cont_from_registro">
                <form action="{{ route('user.password_reset_request') }}" method="POST">
                    @csrf
                    <div class="input-container">
                        <input type="email" id="email" name="email" placeholder="Correo electrónico">
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
