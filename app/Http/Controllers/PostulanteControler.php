<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Postulante;

class PostulanteControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // utilizamos el Trainer, y el metodo all(consulta todos los entrenadores que esten registrados y los trae)
        $postulantes = Postulante::all();
        // el parametro compact genera un array con los valores que le asignemos
        return view('postulantes.index', compact('postulantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postulantes.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // creamos una variable trainer que tiene una instancia de nuestro modelo Trainer
        $postulante = new Postulante();
        $postulante->nombre = $request->input('nombre');
        $postulante->apellido = $request->input('apellido');
        $postulante->intro = $request->input('intro');
        $postulante->posicion = $request->input('posicion');

        $postulante->numero = $request->input('numero');
        $postulante->correo = $request->input('correo');
        $postulante->pais = $request->input('pais');
        $postulante->direccion = $request->input('direccion');
        $postulante->estado = $request->input('estado');
        $postulante->codigopostal = $request->input('codigopostal');
        $postulante->linkedin = $request->input('linkedin');
        $postulante->sitioweb = $request->input('sitioweb');

        $postulante->puesto = $request->input('puesto');
        $postulante->empresa = $request->input('empresa');
        $postulante->desdehastapuesto = $request->input('desdehastapuesto');
        $postulante->descriptionpuesto = $request->input('descriptionpuesto');

        $postulante->titulo = $request->input('titulo');
        $postulante->escuela = $request->input('escuela');
        $postulante->desdehastaeducacion = $request->input('desdehastaeducacion');
        $postulante->descriptioneducacion = $request->input('descriptioneducacion');

        $postulante->habilidad = $request->input('habilidad');
        $postulante->nivelhabilidad = $request->input('nivelhabilidad');

        $postulante->hoobie = $request->input('hoobie');

        $postulante->idioma = $request->input('idioma');
        $postulante->nivelidioma = $request->input('nivelidioma');

        $postulante->cv = $request->file('cv');

        $postulante->save();
        return 'Saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
// utilizamos el Trainer, y el metodo all(consulta todos los entrenadores que esten registrados y los trae)
        $postulantes = Postulante::all();
// el parametro compact genera un array con los valores que le asignemos
        return view('postulantes.read', compact('postulantes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
