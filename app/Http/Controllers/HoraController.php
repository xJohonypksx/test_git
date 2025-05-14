<?php

namespace App\Http\Controllers;

use App\Models\Hora;
use Illuminate\Http\Request;

class HoraController extends Controller
{

    public function index()
    {
        $horas = Hora::all();
        //dd($horas);

        return view('horas.index',data:compact("horas"));
        //
    }


    public function create()
    {
        return view('horas.create');
    }


    public function store(Request $request)
    {
        Hora::create([
            "descripcion_h"=>$request->descripcion_h,

        ]);
        return redirect()->route('horas.index');
    }


    public function show(Hora $hora)
    {
        return "Hola desde show";//
    }


    public function edit(Hora $hora)
    {
        //dd($hora);
        return view('horas.edit',compact("hora"));
    }


    public function update(Request $request, Hora $hora)
    {
        //dd($hora);
        $hora->update($request->all());
        return redirect()->route('horas.index');
    }


    public function destroy(Hora $hora)
    {
        //dd($hora);
        $hora->delete();
        return redirect()->route('horas.index');
    }
}
