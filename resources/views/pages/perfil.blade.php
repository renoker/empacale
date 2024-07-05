@extends('layouts.main')
@section('title', 'Maruchan - Mi Perfil')
@section('content')

    @if ($vidas < 1)
        <a href="{{ route('participation.create') }}">Agregar código lote</a>
    @else
        <p>Vidas: {{ $vidas }}</p>
        <br>
        <br>
        <br>
        <a href="{{ route('game.index') }}">Jugar</a>
    @endif

@endsection
