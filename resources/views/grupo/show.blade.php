@extends('layouts.app')

@section('template_title')
    {{ $grupo->name ?? "{{ __('Show') Grupo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Grupo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('grupos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $grupo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $grupo->semestre }}
                        </div>                        
                        <div class="form-group">
                            <strong>Pe Id:</strong>
                            {{ $grupo->pe->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
