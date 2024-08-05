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
                    <a href="{{ route('ganadores.export', $week) }}">
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
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Semana</th>
                            <th>Score</th>
                            <th>Duración</th>
                            <th>D</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($participations as $item)
                            <tr>
                                <td>{{ $item->score_id }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $week->name }}</td>
                                <td>{{ $item->score }}</td>
                                <td>{{ $item->calcularDiferencia($item->start, $item->end) }}
                                </td>
                                <td>{{ $item->duration_hms }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
