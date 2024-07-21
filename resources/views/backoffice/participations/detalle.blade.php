@extends('backoffice.commons.layout')

@section('head')
    <title>Detalle del juego</title>
    <meta name="description" content="Categorias Blog">
@endsection

@section('content')
    <div id="page-title">
        <div>
            <h2>Detalles</h2>
            <p>Listada de imagenes</p>
        </div>
    </div>

    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <h3 class="title-hero col-sm-5">

                </h3>
                {{-- <div class="col-sm-7 float-right text-right">
                    <a href="{{ route('participation.export', $participation_day) }}">
                        <button class="btn btn-alt btn-hover btn-info">
                            <span>Descargar</span>
                            <i class="glyph-icon icon-pencil"></i>
                        </button>
                    </a>
                </div> --}}
            </div>
            <div class="example-box-wrapper">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered"
                    id="datatable-example">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Puntos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lista as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <img src="{{ $item->image->src }}" style="width: 40px" alt="">
                                </td>
                                <td>{{ $item->image->points }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
