@extends('backoffice.commons.layout')

@section('head')
    <title>Fotos de {{ $participation->user->name }}</title>
    <meta name="description" content="Categorias Blog">
@endsection

@section('content')

<div id="page-title">
    <div>
        <h2>Fotos de {{ $participation->user->name }}</h2>
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
            <h2>Usuario: {{ $participation->user->name }}</h2>
            <br>
            @if($participation->approved_photos->count() > 0)
            <h2>Fotos Aceptadas</h2>
            <div style="display: flex; flex-wrap: wrap;">
                @foreach($participation->approved_photos as $photo)
                <div style="margin-right: 15px; margin-bottom: 15px;">
                    <img src="{{ $photo->s3_url() }}" alt="" style="width: 400px; height: 400px; object-fit: contain; background-color: rgba(0,128,0, 0.4)">        
                    <div><strong>Fecha de carga:</strong> {{ $photo->created_at }}</div>
                </div>
                @endforeach
            </div>
            @endif
            <br>
            @if($participation->denied_photos->count() > 0)
            <h2>Fotos Denegadas</h2>
            <div style="display: flex; flex-wrap: wrap;">
                @foreach($participation->denied_photos as $photo)
                <div style="margin-right: 15px; margin-bottom: 15px;">
                    <img src="{{ $photo->s3_url() }}" alt="" style="width: 400px; height: 400px; object-fit: contain; background-color: rgba(255,0,0, 0.4)">        
                    <div><strong>Fecha de carga:</strong> {{ $photo->created_at }}</div>
                </div>
                @endforeach
            </div>
            @endif
            @if($participation->unchecked_photos->count() > 0)
            <h2>Fotos Sin Verificar</h2>
            <div style="display: flex; flex-wrap: wrap;">
                @foreach($participation->unchecked_photos as $photo)
                <div style="margin-right: 15px; margin-bottom: 15px;">
                    <img src="{{ $photo->s3_url() }}" alt="" style="width: 400px; height: 400px; object-fit: contain; background-color: rgba(0,0,0, 0.1)">        
                    <div><strong>Fecha de carga:</strong> {{ $photo->created_at }}</div>
                </div>
                @endforeach
            </div>
            @endif
            
            
        </div>
    </div>
</div>
@endsection