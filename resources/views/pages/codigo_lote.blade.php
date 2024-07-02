@extends('layouts.main')
@section('title', 'Maruchan - Código Lote')
@section('popups')

@endsection
@section('content')
    <form action="{{ route('participation.store') }}" method="POST">
        @csrf
        @method('POST')
        <div>
            <select name="product_id">
                <option value="0">Selecciona el producto</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="text" name="codigo_lote" placeholder="Código lote">
        </div>
        <div class="text-center mt-10">
            <button type="submit">Enviar</button>
        </div>
    </form>
@endsection
@section('scripts')
    @vite('resources/js/codigo_lote.js')
@endsection
{{-- 12032408:491DE110 --}}
