@extends('backoffice.commons.layout')

@section('head')
    <title>Ganadores</title>
    <meta name="description" content="Categorias Blog">
@endsection

@section('content')

<div id="page-title">
    <div>
        <h2>Ganadores</h2>
        <p>Listado de ganadores</p>
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
                        <th>Fecha</th>
                        <th>Nombre</th>
                        <th>Se ve en Web</th>
                        <th>Semana</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($winners as $winner)
                    <tr>
                        <td>{{ $winner->participation_day->date }}</td>
                        <td>{{ $winner->name }}</td>
                        <td>{{ $winner->show_on_web ? "Si" : "No" }}</td>
                        <td>{{ $winner->participation_day->week->name }}</td>
                        <td><a href="{{ route('winners.edit', $winner) }}"><button class="btn btn-alt btn-hover btn-info"><span>Editar</span><i class="glyph-icon icon-pencil"></i></button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection