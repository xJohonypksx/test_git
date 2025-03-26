<?php

namespace App\Http\Controllers;

use App\Models\Hora;
use Illuminate\Http\Request;

class HoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hora.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Hola desde create";//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Hola desde store";//
    }

    /**
     * Display the specified resource.
     */
    public function show(Hora $horas)
    {
        return "Hola desde show";//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hora $horas)
    {
        return "Hola desde edit";//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hora $horas)
    {
        return "Hola desde update";//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hora $horas)
    {
        return "Hola desde destroy";//
    }
}
