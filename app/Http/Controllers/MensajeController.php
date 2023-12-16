<?php

namespace App\Http\Controllers;

use App\Models\mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensajes=mensaje::all();
        return view('VistaMensaje.index',['mensajes'=>$mensajes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('VistaMensaje.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $mensaje=new mensaje();
        $mensaje->titulo=$r->titulo;
        $mensaje->descripcion=$r->descripcion;
        $mensaje->save();
        return redirect()->route('mensaje.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(mensaje $mensaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mensaje $mensaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mensaje $mensaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mensaje $mensaje)
    {
        //
    }
}
