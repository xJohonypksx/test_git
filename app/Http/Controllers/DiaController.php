<?php

namespace App\Http\Controllers;

use App\Models\Dia;
use Illuminate\Http\Request;

class DiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dias = Dia::all();
        //dd($dias);
        return view('dia.index',compact("dias"));//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('dia.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Dia::create([
            "descripcion_dia"=>$request->descripcion_dia,

        ]);
        return redirect()->route('dias.index');//
    }

    /**
     * Display the specified resource.
     */
    public function show(Dia $dias)
    {
       return "HOLA DESDE SHOW"; //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dia $dias)
    {
        return view ('dia.edit',compact("dias"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dia $dias)
    {
        $dias->update($request->all());
        return redirect()->route('dias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dia $dias)
    {
        $dias->delete();
        return redirect()->route('dias.index');
    }
}
