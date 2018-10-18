@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Alta del Alumno
                </div>

                <div class="panel-body">
                
                {!! Form::open(['route'=> 'alumnos.store','files'=>true]) !!}

                @include('alumnos.partials.form')
                
                {!! Form::close() !!}
                
                
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection 