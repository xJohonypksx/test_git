<?php

namespace App\Http\Controllers;

use App\Models\Hora;
use App\Models\Horas;
use Illuminate\Http\Request;

class HoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horas = Hora::all();
        //dd($horas);

        return view('horas.index',data:compact(""));
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
    public function show(Horas $horas)
    {
        return "Hola desde show";//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horas $horas)
    {
        return "Hola desde edit";//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Horas $horas)
    {
        return "Hola desde update";//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horas $horas)
    {
        return "Hola desde destroy";//
    }
}
