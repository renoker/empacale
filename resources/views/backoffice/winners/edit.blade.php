@extends('backoffice.commons.layout')

@section('head')
    <title>Ganadores</title>
    <meta name="description" content="Categorias Blog">
@endsection

@section('content')

<div id="page-title">
    <div>
        <h2>Ganador {{ $winner->participation_day->date }}</h2>
        <p></p>
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
        <form class="form-horizontal bordered-row" action="{{ route('winners.update', $winner) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nombre *</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" required name="name" value="{{ $winner->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Mostrar en web *</label>
                    <div class="col-sm-6">
                        <select class="form-control single" name="show_on_web">
                            <option value="0" @if($winner->show_on_web == 0)selected @endif >No</option>
                            <option value="1" @if($winner->show_on_web == 1)selected @endif >Si</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-6 offset-sm-3">
                        <button type="submit" class="btn btn-info">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection