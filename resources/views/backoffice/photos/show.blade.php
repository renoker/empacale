@extends('backoffice.commons.layout')

@section('head')
    <title>Foto de {{ $photo->participation->user->name }}</title>
    <meta name="description" content="Categorias Blog">
@endsection

@section('content')

<div id="page-title">
    <div>
        <h2>Foto de {{ $photo->participation->user->name }}</h2>
        <p>Listado de fotos cargadas</p>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <div class="row">
            <h3 class="title-hero col-sm-5">
                
            </h3>
        </div>
        <div class="example-box-wrapper">
            <div>Usuario: {{ $photo->participation->user->name }}</div>
            <div>Fecha de carga: {{ $photo->created_at }}</div>
            <div>Estatus: {{ $photo->photo_status->name }}</div>
            <br>
            <img src="{{ $photo->s3_url() }}" alt="" style="width: 800px; object-fit: contain;">
            
        </div>
    </div>
</div>
@endsection