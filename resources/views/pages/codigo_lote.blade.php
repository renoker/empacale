@extends('layouts.main')
@section('title', 'Maruchan - Código Lote')
@section('back', 'back_codigo_lote')
@section('popups')
    <div id="popup" class=''>
        <div class="opacidad">
            <div class='popup_productos'>
                <img src="{{ url('assets/images/codigo_lote/tache.png') }}" id="btnClose" class="close" alt="">
                <div class="cont">
                    <h1 class="encabezado">¿DÓNDE ENCONTRAR EL CÓDIGO LOTE?</h1>
                    <h6 class="txt">
                        El código LOTE está ubicado en la parte trasera de cualquier producto de la Familia Maruchan. Está
                        conformado por 17 caracteres, entre números y letras. Debes colocarlos sin espacios y con los dos (
                        : ) puntos que aparecen en medio del LOTE.
                    </h6>
                    <div class="conten_imagen_popup">
                        <img src="{{ url('assets/images/codigo_lote/Lote.png') }}" class="w-100" alt="">
                    </div>
                    <h1 class="txt_bold">Recuerda que cada código LOTE que
                        registres te dará 3 vidas para jugar, entre más códigos LOTE registres tendrás más oportunidades de
                        mejorar tu tiempo y aumentar tu puntaje.</h1>
                    <h1 class="txt pt">Guarda todos tus empaques vacíos con los códigos lotes que registraste ya que en caso
                        de resultar ganador te lo solicitaremos de manera física el empaque con el que ganaste.</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="content_codigo_lote">
        <div class="cont_imgen_titulo">
            <img src="{{ url('assets/images/codigo_lote/titulo.png') }}" class="img_titulo" alt="">
            <h6 class="texto">INGRESA TU PRODUCTO</h6>
            <h6 class="texto_small">¡Registra el código de cualquier producto Maruchan y juega Empácale con Maruchan!</h6>
            <div class="cont_from_lote">
                <form action="{{ route('participation.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="input-container">
                        <select name="product_id">
                            <option value="0">INGRESA TU PRODUCTO</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-container">
                        <input type="text" id="text" name="codigo_lote" placeholder="INGRESA TU CÓDIGO LOTE">
                    </div>

                    <div class="cont_button">
                        <input type="image" src="{{ url('assets/images/registro/boton.png') }}" alt="Enviar"
                            class="btn_image">
                    </div>

                    <div class="content_advertencias">
                        <h6 class="popup_active" id="btnOpen">¿NO SABES EN DÓNDE ENCONTRAR EL CÓDIGO LOTE?</h6>
                        <h6 class="descripcion">
                            Registra el código LOTE de cualquier producto de la Familia Maruchan para poder jugar a Empácale
                            con Maruchan y convertirte en uno de nuestros ganadores. Cada código LOTE que registres te dará
                            una sesión con 3 vidas para jugar, entre más códigos LOTE registres tendrás más oportunidades de
                            mejorar tu tiempo y aumentar tu puntaje.
                        </h6>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="barra_naranja">
        <h1 class="h1">Guarda tus empaques vacíos con los códigos lotes que registres ya que si resultas ganador te lo
            solicitaremos de manera física el empaque con el que ganaste.</h1>
    </div>
@endsection
@section('scripts')
    @vite('resources/js/codigo_lote.js')
@endsection
{{-- 12032408:491DE110 --}}
