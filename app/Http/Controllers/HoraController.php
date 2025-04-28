<?php

namespace App\Http\Controllers;

use App\Models\Dia;
use App\Models\Hora;
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

        return view('horas.index',data:compact("horas"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('horas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Hora::create([
            "descripcion_h"=>$request->descripcion_h,

        ]);
        return redirect()->route('horas.index');    }

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
    public function edit(Hora $hora)
    {
        //dd($hora);
        return view('horas.edit',compact("hora"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hora $hora)
    {
        //dd($hora);
        $hora->update($request->all());
        return redirect()->route('horas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hora $hora)
    {
        //dd($hora);
        $hora->delete();
        return redirect()->route('horas.index');
    }
}
