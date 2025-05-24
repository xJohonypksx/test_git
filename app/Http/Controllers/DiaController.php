<?php

namespace App\Http\Controllers;

use App\Models\Dia;
use Illuminate\Http\Request;

class DiaController extends Controller
{
    public function index()
    {
        $dias = Dia::all();
        return view('dia.index', compact('dias'));
    }

    public function create()
    {
        return view('dia.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'desc_dia' => 'required|string|max:100',
        ]);

        Dia::create([
            'desc_dia' => $request->desc_dia
        ]);

        return redirect()->route('dias.index')->with('success', 'Día creado exitosamente.');
    }

    public function show(Dia $dia)
    {
        return view('dia.show', compact('dia'));
    }

    public function edit($id)
    {
        $dia = Dia::findOrFail($id);
        return view('dia.edit', compact('dia'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'desc_dia' => 'required|string|max:100',
        ]);

        $dia = Dia::findOrFail($id);
        $dia->desc_dia = $request->desc_dia;
        $dia->save();

        return redirect()->route('dias.index')->with('success', 'Día actualizado exitosamente.');
    }

    public function destroy(Dia $dia)
    {
        $dia->delete();

        return redirect()->route('dias.index')->with('success', 'Día eliminado exitosamente.');
    }
}
