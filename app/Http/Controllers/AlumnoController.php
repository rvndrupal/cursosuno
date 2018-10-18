<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteStoreRequest;
use Illuminate\Support\Facades\Storage;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos=Alumno::orderBy('id','DESC')->paginate(5);

        return view('alumnos.index', compact('alumnos')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno=Alumno::create($request->all());

        if($request->file('foto')){ //si se manda el archivo
            $path=Storage::disk('public')->put('image', $request->file('foto'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $alumno->fill(['foto' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }
        
        return redirect()->route('alumnos.index')
        ->with('info','Alumno guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.show', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update($request->all());

        if($request->file('foto')){ //si se manda el archivo
            $path=Storage::disk('public')->put('image', $request->file('foto'));
            //utiliza la funcion de guardar en public crea la carpeta image y pasa el archivo
            $alumno->fill(['foto' => asset($path)])->save(); //actualizame la ruta en el post
            //el asset toma toda la ruta y se genera correctamente toda la ruta
        }
        return redirect()->route('alumnos.index')
        ->with('info','Alumno actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
