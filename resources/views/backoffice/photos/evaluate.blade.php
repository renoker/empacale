@extends('backoffice.commons.layout')

@section('head')
    <title>Evaluar fotos</title>
    <meta name="description" content="">
@endsection

@section('content')

<div id="page-title">
    <div>
        <h2>Evaluar fotos</h2>
        <p></p>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <div class="row">
            <h3 class="title-hero col-sm-5">
                
            </h3>
        </div>
        <div class="example-box-wrapper">
            @if($photo)
                <img src="{{ $photo->s3_url() }}" alt="" style="width: 800px; height: 800px; object-fit: contain;">
                <div style="display: flex;">
                    <form action="{{ route('photo.update_status', $photo) }}" method="POST">
                        @csrf
                        <input type="hidden" name="photo_status_id" value="2">
                        <button class="btn btn-alt btn-hover btn-success">
                            <span>Válida</span>
                            <i class="glyph-icon icon-check"></i>
                        </button>
                    </form>
                    <form action="{{ route('photo.update_status', $photo) }}" method="POST">
                        @csrf
                        <input type="hidden" name="photo_status_id" value="3">
                        <button class="btn btn-alt btn-hover btn-danger" style="margin-left: 20px;">
                            <span>Inválida</span>
                            <i class="glyph-icon icon-close"></i>
                        </button>
                    </form>
                </div>
            @else
                <h2>No hay fotos pendientes por evaluar</h2>
            @endif
        </div>
    </div>
</div>
@endsection