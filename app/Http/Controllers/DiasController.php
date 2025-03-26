<?php

namespace App\Http\Controllers;

use App\Models\Dias;
use Illuminate\Http\Request;

class DiasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dias.index');//
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
    public function show(Dias $dias)
    {
       return "HOLA DESDE SHOW"; //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dias $dias)
    {
        return "HOLA DESDE EDIT";//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dias $dias)
    {
        return "HOLA DESDE UPDATE";//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dias $dias)
    {
        return "HOLA DESDE DESTROY";//
    }
}
