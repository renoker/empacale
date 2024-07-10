@extends('layouts.main')
@section('title', 'Maruchan - Registro')
@section('back', 'back_registro')

@section('content')
    <div class="content_registro">
        <div class="cont_imgen_titulo">
            <img src="{{ url('assets/images/registro/titulo.png') }}" class="img_titulo" alt="">
        </div>
        <div class="cont">
            <div class="cont_from_registro">
                <form action="{{ route('user.sign_in') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="input-container">
                        <input type="text" id="name" name="name" placeholder="Nombre Completo">
                    </div>
                    <div class="input-container">
                        <input type="email" id="email" name="email" placeholder="Correo electrónico">
                    </div>
                    <div class="input-container">
                        <input placeholder="Número telefónico" type="tel" name="phone" id="phone">
                    </div>
                    <div class="input-container">
                        <input placeholder="Contraseña" type="password" name="password" id="password">
                    </div>

                    <div class="cont_button">
                        <input type="image" src="{{ url('assets/images/registro/boton.png') }}" alt="Enviar"
                            class="btn_image">
                    </div>
                </form>
            </div>
            <div class="cont_imagen_ilustrativa">
                <img src="{{ url('assets/images/registro/logo.png') }}" class="img_logo_registro" alt="">
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @vite('resources/js/registro.js')
@endsection
