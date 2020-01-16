<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\contacto;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$dato = "Formulario de contacto";
        $contactos = contacto::All();
        //$dato2 = array('parrafo1' => 'Esta es parrafo 1', 'parrafo2' => 'Esta es parrafo 2' );
        return view('sitio.index', compact('contactos'))->with('titulo', 'Esta es la pagina de Contacto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sitio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $datos)
    {
        $contacto = new contacto();
        $contacto->nombre = $datos->nombre;
        $contacto->telefono = $datos->telefono;
        $contacto->save();

        return redirect('/contacto')->with('ok', 'El contacto de ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacto = contacto::find($id); //select * from contacto where id = $id   
        return view('sitio.show', compact('contacto'));  
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
