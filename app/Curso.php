<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'nombre', 'descripcion','alumno_id','category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class);
    }
}
