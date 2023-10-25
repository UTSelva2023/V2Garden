@extends('layouts.app')

@section('template_title')
    {{ $flore->name ?? 'Show Flore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Flore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('flores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $flore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $flore->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $flore->imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
