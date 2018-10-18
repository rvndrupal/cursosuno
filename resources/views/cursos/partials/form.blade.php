<div class="from-group">    
    {!! Form::label('nombre','Nombre del Curso') !!}
    
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('descripcion','Descripcion') !!}
    
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('category_id','Categorías') !!}
    
    {!! Form::select('category_id', $categories , null , ['class' => 'form-control']) !!}   <!--Se obtiene la categoria-->
    
</div>

<div class="from-group">    
    {!! Form::label('alumno_id','Alumno') !!}
    
    {!! Form::select('alumno_id', $alumnos , null , ['class' => 'form-control']) !!}   <!--Se obtiene la categoria-->
    
</div>
<hr>

<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>