<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        'nombre', 'apellidos','foto',
    ];

    public function curso(){ // Una categoria puede tener muchos post
        return $this->hasMany(Curso::class);  //una categoria tiene n post
    }
}
