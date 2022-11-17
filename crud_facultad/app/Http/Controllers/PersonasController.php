<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {
        //pagina de inicio de nuestro crud
        //ejemplo de pasar datos a la vista welcome.blade.php
        //$datos = "Hola Mundillo dddd";
        //$datos2 = "222";
        //return view('welcome', compact('datos', 'datos2'));
        $datos = Personas::all();

        return view('inicio', compact('datos'));
    }

    public function create()
    {
        //formulario donde agregamos datos
        return view('agregar');
    }

    public function store(Request $request)
    {
        //guarda datos en la bd
        //print_r($_POST);
        $personas = new Personas();
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route("personas.index")->with("success", "Agregado con exito!");
    }

    public function show($id)
    {
        //muestra un solo registro

        $personas = Personas::find($id);
        
        return view('eliminar', compact('personas'));
    }

    public function edit($id)
    {
        //edita los datos en un formulario
        
        $personas = Personas::find($id);
        
        return view('actualizar', compact('personas'));
        //echo $id;
    }

    public function update(Request $request, $id)
    {
        //modifica los datos editados

        $personas = Personas::find($id);

        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route("personas.index")->with("success", "Actualizado con exito!");
    }

    public function destroy($id)
    {
        //elimina un registro

        $personas = Personas::find($id);

        $personas->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con exito!");
    }
}
 