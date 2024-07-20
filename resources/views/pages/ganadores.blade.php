@extends('layouts.main')
@section('title', 'Maruchan - Ganadores')
@section('back', 'back_ganadores')

@section('content')
    <div class="content_ganadores">
        <img src="{{ url('assets/images/ganadores/playa.png') }}" class="img_playa" alt="">
        <img src="{{ url('assets/images/ganadores/pueblo_magico.png') }}" alt="">
        <img src="{{ url('assets/images/ganadores/bosque.png') }}" alt="">
        <img src="{{ url('assets/images/ganadores/ciudad.png') }}" alt="">
    </div>
@endsection
