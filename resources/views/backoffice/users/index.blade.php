@extends('backoffice.commons.layout')

@section('head')
    <title>Usuarios {{ $week->name}}</title>
    <meta name="description" content="Categorias Blog">
@endsection

@section('content')

<div id="page-title">
    <div>
        <h2>Usuarios {{ $week->name}}</h2>
        <p>Listado de usuarios registrados en la {{ $week->name}}</p>
    </div>
</div>

<div class="panel">
    <div class="panel-body">
        <div class="row">
            <h3 class="title-hero col-sm-5">
                
            </h3>
            <div class="col-sm-7 float-right text-right">
                <a href="{{ route('users.export', $week) }}">
                    <button class="btn btn-alt btn-hover btn-info">
                        <span>Descargar</span>
                        <i class="glyph-icon icon-pencil"></i>
                    </button>
                </a>
            </div>
        </div>
        <div class="example-box-wrapper">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
                <thead>
                    <tr>
                        <th>Fecha y hora de Registro</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->created_at->format('Y-m-d H:i:s')}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection