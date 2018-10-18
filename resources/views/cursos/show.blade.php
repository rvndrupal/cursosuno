@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Curso
                </div>                
                <div class="panel-body">
                <p> <strong>Nombre</strong> {{ $curso->nombre }}</p>
                <p> <strong>Descripción</strong> {{ $curso->descripcion }}</p>
                <p> <strong>Alumno</strong> {{ $curso->alumno->nombre }}</p>
                <p> <strong>Foto</strong> 
                    @if($curso->alumno->foto)
                    <img style="width: 80px; height: 60px;" src="{{ $curso->alumno->foto }}" class="foto_cliente">
                    @endif
                </p>
                <p> <strong>Categoria</strong> {{ $curso->category->nombre }}</p>
               
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 