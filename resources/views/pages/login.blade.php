@extends('layouts.main')
@section('title', 'Maruchan - Login')

@section('content')
    <form action="{{ route('user.login') }}" method="post">
        @csrf
        @method('POST')
        <input placeholder="Correo electrónico" type="email" name="email" />
        <input placeholder="Contraseña" type="password" name="password" />
        <div>
            <a href="{{ route('user.olvide_contrasenia') }}">
                Olvidé mi contraseña
            </a>
            <a href="{{ route('user.registro') }}">
                No tengo cuenta aún, me quiero registrar
            </a>
        </div>
        <div class="text-center lg:text-right">
            <button type="submit">Enviar</button>
        </div>
    </form>
@endsection
@section('scripts')
    @vite('resources/js/login.js')
@endsection
