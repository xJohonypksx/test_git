<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('generos.index');//
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
    public function show(Genero $genero)
    {
        return"HOLA DESDE Show";//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genero $genero)
    {
        return"HOLA DESDE Edit";//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genero $genero)
    {
        return "HOLA DESDE UPDATE";//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genero $genero)
    {
        return"HOLA DESDE DELETE";//
    }
}
