@extends('layouts.main')
@section('title', 'Maruchan - thank you page')
@section('back', 'back_typ')

@section('content')
    <div class="content_typ">
        <div class="cont_imgen_titulo">
            <img src="{{ url('assets/images/typ/titulo.png') }}" class="img_titulo" alt="">
            <h6 class="texto">¡Listo, completaste tu registro!</h6>
            <h6 class="texto_small">¡Ahora empaca tu maleta para hacer todos los puntos que puedas, evita errores y suma
                puntos extra con los productos Maruchan dorados! </h6>
            <div class="cont_button">
                <a href="{{ route('user.profile') }}">
                    <button type="button" class="empaca">EMPACA TU MALETA</button>
                </a>
            </div>
            <div class="cont_premios">
                <img src="{{ url('assets/images/typ/polaroid1.png') }}" alt="">
                <img src="{{ url('assets/images/typ/polaroid2.png') }}" alt="">
                <img src="{{ url('assets/images/typ/polaroid3_new.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection
,
