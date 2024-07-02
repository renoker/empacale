@extends('layouts.main')
@section('title', 'Maruchan - Registro')

@section('content')
    <form action="{{ route('user.sign_in') }}" method="POST">
        @csrf
        @method('POST')
        <input placeholder="Nombre Completo" type="text" name="name" />
        <input placeholder="Correo electrónico" type="email" name="email" />
        <input placeholder="Número telefónico" type="tel" name="phone" />
        <input placeholder="Contraseña" type="password" name="password" />
        <button type="submit">Enviar</button>
    </form>
@endsection
@section('scripts')
    @vite('resources/js/registro.js')
@endsection
