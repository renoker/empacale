@extends('backoffice.commons.layout')

@section('head')
    <title>Participaciones {{ $week->name }}</title>
    <meta name="description" content="Categorias Blog">
@endsection

@section('content')
    <div id="page-title">
        <div>
            <h2>Participaciones {{ $week->name }}</h2>
            <p>Listado de Participaciones {{ $week->name }}</p>
        </div>
    </div>

    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <h3 class="title-hero col-sm-5">

                </h3>
                <div class="col-sm-7 float-right text-right">
                    <a href="{{ route('participation.export', $week) }}">
                        <button class="btn btn-alt btn-hover btn-info">
                            <span>Descargar</span>
                            <i class="glyph-icon icon-pencil"></i>
                        </button>
                    </a>
                </div>
            </div>
            <div class="example-box-wrapper">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered"
                    id="datatable-example">
                    <thead>
                        <tr>
                            <th>Fecha y hora de Registro del usuario</th>
                            <th>Fecha y hora de registro de Código Lote</th>
                            <th>Usuario</th>
                            <th>Código Lote</th>
                            <th>Producto</th>
                            <th>Vidas usadas</th>
                            <th>Ver juegos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($participations as $participation)
                            <tr>
                                <td>{{ $participation->user->created_at }}</td>
                                <td>{{ $participation->created_at }}</td>
                                <td>{{ $participation->user->name }}</td>
                                <td>{{ $participation->codigo_lote }}</td>
                                <td>{{ $participation->product->name }}</td>
                                <td>{{ $participation->no_vidas() }}</td>
                                <td><a href="{{ route('participation.show', $participation) }}"><button
                                            class="btn btn-alt btn-hover btn-info"><span>Ver juegos</span><i
                                                class="glyph-icon icon-eye"></i></button></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
