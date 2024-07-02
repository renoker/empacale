@extends('backoffice.commons.layout')

@section('head')
    <title>Fotos día {{ $participation_day->date }}</title>
    <meta name="description" content="Categorias Blog">
@endsection

@section('content')

<div id="page-title">
    <div>
        <h2>Fotos día {{ $participation_day->date }}</h2>
        <p>Listado de fotos cargadas {{ $participation_day->date }}</p>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <div class="row">
            <h3 class="title-hero col-sm-5">
                
            </h3>
            <div class="col-sm-7 float-right text-right">
            
            </div>
        </div>
        <div class="example-box-wrapper">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
                <thead>
                    <tr>
                        <th>Fecha y hora de Carga</th>
                        <th>Usuario</th>
                        <th>Status</th>
                        <th>Ver imagen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($photos as $photo)
                    <tr>
                        <td>{{ $photo->created_at }}</td>
                        <td>{{ $photo->participation->user->name }}</td>
                        <td>{{ $photo->photo_status->name }}</td>
                        <td><a href="{{ route('photo.show', $photo) }}"><button class="btn btn-alt btn-hover btn-info"><span>Ver imagen</span><i class="glyph-icon icon-eye"></i></button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection