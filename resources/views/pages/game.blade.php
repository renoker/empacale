@extends('layouts.game')
@section('title', 'Maruchan - Game')

@section('content')
    <div class="container mt-5">
        <div class="text-center mb-3 d-flex justify-content-between">
            <input type="hidden" id="partida">
            <button class="btn btn-primary" id="startButton" onclick="startGame()">Iniciar</button>
            <p id="timer">Time: 00:00:00.000</p>
            <p id="score">Score: 0</p>
            <p id="level">Level: 1</p>
        </div>
        <div class="droppable" id="droppable" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    </div>
@endsection
