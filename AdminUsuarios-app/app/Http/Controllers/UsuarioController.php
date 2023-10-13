<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* return Usuario::all(); */

        
        $usuario =new Usuario();
        return $usuario->all(); 
       
    }

    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->correos = $request->correo;
        $usuario->fechas = $request->fecha;
        $usuario->save();
        return "Registro Guardado Correctamente";
    }
    
    public function show(string $id)
    {
        return Usuario::where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->correos = $request->correo;
        $usuario->fechas = $request->fecha;
        $usuario->save();
        return $usuario;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return "Registro Eliminado Correctamente";
    }
}
