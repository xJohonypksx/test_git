<?php

namespace App\Http\Controllers;

use App\Models\proyecciones;
use Illuminate\Http\Request;

class ProyeccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('proyecciones.index');//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(proyecciones $proyecciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(proyecciones $proyecciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, proyecciones $proyecciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(proyecciones $proyecciones)
    {
        //
    }
}

