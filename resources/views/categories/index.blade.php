@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Categoria
                    @can('categories.create')
                    <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary pull-right">Nuevo</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categorias as $categoria )
                            <tr>
                                <td>{{ $categoria->id }}</td>
                                <td>{{ $categoria->nombre }}</td>
                               
                                <td width="10px">
                                @can('categories.show')
                                    <a href="{{ route('categories.show', $categoria->id) }}" class="btn btn-sm btn-default">Ver</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('categories.edit')
                                    <a href="{{ route('categories.edit', $categoria->id) }}" class="btn btn-sm btn-default">Editar</a>
                                @endcan
                                </td>
                                <td width="10px">
                                @can('categories.destroy')
                                    
                                {!! Form::open(['route'=>['categories.destroy', $categoria->id],
                                'method'=>'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                
                                {!! Form::close() !!}                               
                                    
                                @endcan
                                </td>

                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>

                    {{ $categorias->render() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection