@extends('layouts.game')
@section('title', 'Maruchan - Game')
@section('body', 'body_game')

@section('popups')
    <div id="popup_tiempo" class="active">
        <div class="opacidad">
            <div class="content_button">
                <img src="{{ url('assets/images/game/precarga/titulo.png') }}" class="titulo_pop" alt="">
                <div class="cont_cuadros">
                    <div class="cont_informacion">
                        @if ($week->id == 1)
                            <img src="{{ url('assets/images/game/precarga/PLAYA.png') }}" class="titulo_de" alt="">
                        @elseif ($week->id == 2)
                            <img src="{{ url('assets/images/game/precarga/MAGICO.png') }}" class="titulo_de" alt="">
                        @elseif ($week->id == 3)
                            <img src="{{ url('assets/images/game/precarga/BOSQUE.png') }}" class="titulo_de" alt="">
                        @elseif ($week->id == 4)
                            <img src="{{ url('assets/images/game/precarga/CIUDAD.png') }}" class="titulo_de" alt="">
                        @endif
                        <ol class="ol">
                            @foreach ($lista as $item)
                                <li>{{ $item->name }}</li>
                            @endforeach
                        </ol>
                        <div class="center">
                            <img src="{{ url('assets/images/game/precarga/jugar.png') }}" id="startButton"
                                class="button_arranca_juego" onclick="startGame()" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="popup_final_game" class="">
        <div class="opacidad">
            <div class="popup_productos">
                <h1 class="encabezado">¡FELICIDADES METISTE A LA <br> MALETA TODOS LOS OBJETOS!</h1>
            </div>
        </div>
    </div>

    <div id="popup_final_game_errores" class="">
        <div class="opacidad">
            <div class="popup_productos">
                <h1 class="encabezado">¡JUEGO FINALIZADO! <br> METISTE 3 OBJETOS ERRÓNEOS A TU MALETA</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="contenedor_juego">
        <input type="hidden" id="partida">
        <div class="conten_tiempo">
            <p id="timer">0:00</p>
        </div>
        <div class="conten_puntos">
            <p id="score">0</p>
            <span>PTS</span>
        </div>
        <div class="conten_errores">
            <p id="lives">3</p>
            <span>ERRORES</span>
        </div>
        <div class="droppable" id="maleta">
            <div class="zona" id="droppable" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
            <button class="guardar_productos" id="cerrarMaleta" onclick="cerrarM()">Cerrar maleta</button>
        </div>
    </div>
@endsection
