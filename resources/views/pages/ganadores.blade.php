@extends('layouts.main')
@section('title', 'Maruchan - Ganadores')
@section('back', 'back_ganadores')

@section('content')
    <div class="content_ganadores">
        <img src="{{ url('assets/images/ganadores/Ganadores_Playa.png') }}" class="img_playa" alt="">
        <img src="{{ url('assets/images/ganadores/Ganadores_PuebloMagico.png') }}" alt="">
        <img src="{{ url('assets/images/ganadores/Ganadores_Bosque.png') }}" alt="">
        <img src="{{ url('assets/images/ganadores/Ganadores_Ciudad.png') }}" alt="">
    </div>
@endsection
