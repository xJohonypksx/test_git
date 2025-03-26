<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ciudades.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "HOLA DESDE CREATE";//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "HOLA DESDE STORE";//
    }

    /**
     * Display the specified resource.
     */
    public function show(Ciudad $ciudad)
    {
        return"HOLA DESDE Show";//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ciudad $ciudad)
    {
        return"HOLA DESDE Edit";//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ciudad $ciudad)
    {
        return"HOLA DESDE UPDATE";//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ciudad $ciudad)
    {
        return"HOLA DESDE DELETE";//
    }
}
