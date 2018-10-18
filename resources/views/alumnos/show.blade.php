@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Alumno
                </div>

                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $alumno->nombre }}</p>
                <p> <strong>Apellido</strong> {{ $alumno->apellidos }}</p>
                <p> <strong>Foto</strong> 
                    @if($alumno->foto)
                    <img style="width: 350px; height: 300px;" src="{{ $alumno->foto }}" class="foto_cliente">
                    @endif
                </p>
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 