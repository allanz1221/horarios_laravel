@extends('layouts.app')

@section('template_title')
    {{ $registro->name ?? "{{ __('Show') Registro" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Grupo Id:</strong>
                            {{ $registro->grupo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Docente Id:</strong>
                            {{ $registro->docente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Aula Id:</strong>
                            {{ $registro->aula->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Inicio:</strong>
                            {{ $registro->hora_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Fin:</strong>
                            {{ $registro->hora_fin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
