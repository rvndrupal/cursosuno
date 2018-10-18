<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Category;
use App\Alumno;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos=Curso::paginate(5);

        $cursos->each(function($cursos){
            $cursos->category;
            $cursos->alumno;
        });

        //dd($cursos);
        

        return view('cursos.index', compact('cursos')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::orderBy('nombre','ASC')->pluck('nombre','id');
        $alumnos=Alumno::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('cursos.create', compact('categories','alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso=Curso::create($request->all());
        
        return redirect()->route('cursos.index')
        ->with('info','Curso guardado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //dd($curso);
        return view('cursos.show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        
        $categories=Category::orderBy('nombre','ASC')->pluck('nombre','id');
        $alumnos=Alumno::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('cursos.edit', compact('curso','categories','alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $curso->update($request->all());
        return redirect()->route('cursos.index')
        ->with('info','Curso actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
