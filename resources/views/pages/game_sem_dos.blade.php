@extends('layouts.game')
@section('title', 'Maruchan - Game')
@section('body', 'body_game_dos')

@section('popups')
    <div id="popup_tiempo" class="active">
        <div class="opacidad">
            <div class="content_button">
                <img src="{{ url('assets/images/game/logo.png') }}" alt="">
                <button class="button_arranca_juego" id="startButton" onclick="startGame()">Iniciar</button>
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
        <div class="droppable">
            <div class="zona" id="droppable" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        </div>
    </div>
@endsection
