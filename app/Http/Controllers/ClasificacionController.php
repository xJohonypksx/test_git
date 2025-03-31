<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion;
use Illuminate\Http\Request;

class ClasificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clasificaciones = Clasificacion::all();
        return view('clasificacion.index', compact('clasificaciones'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return"HOLA DESDE CREATE";//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       return "HOLA DESDE STORE"; //
    }

    /**
     * Display the specified resource.
     */
    public function show(Clasificacion $clasificacion)
    {
        return "HOLA DESDE SHOW";//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clasificacion $clasificacion)
    {
       return "HOLA DESDE EDIT"; //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clasificacion $clasificacion)
    {
       return "HOLA DESDE UPDATE"; //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clasificacion $clasificacion)
    {
        return "HOLA DESDE DESTROY";//
    }
}
