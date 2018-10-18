<div class="from-group">    
    {!! Form::label('nombre','Nombre del Alumno') !!}
    
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('apellidos','Apellidos') !!}
    
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}   
    
</div>

<div class="from-group">    
    {!! Form::label('foto','Foto') !!}
    
    {!! Form::file('foto') !!}   

</div>
<hr>

<div class="from-group">    
        
    {!! Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) !!}   
    
</div>