<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index()
    {
        $directores = Director::join ('personas', 'personas.id_persona', '=', 'directores.id_persona')
        ->select('directores.*', 'personas.nom', 'personas.ap', 'personas.am')
        ->get();
        return view('director.index', compact('directores'));
    }

    public function create()
    {
        return view('director.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_persona' => 'required|integer|exists:personas,id_persona',
        ]);

        Director::create([
            'id_persona' => $request->id_persona,
        ]);

        return redirect()->route('directores.index')->with('success', 'Director creado exitosamente.');
    }

    public function show(Director $director)
    {
        return view('director.show', compact('director'));
    }

    public function edit($id)
    {
        $director = Director::findOrFail($id);
        return view('director.edit', compact('director'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_persona' => 'required|integer|exists:personas,id_persona',
        ]);

        $director = Director::findOrFail($id);
        $director->id_persona = $request->id_persona;
        $director->save();

        return redirect()->route('directores.index')->with('success', 'Director actualizado exitosamente.');
    }

    public function destroy(Director $director)
    {
        $director->delete();

        return redirect()->route('directores.index')->with('success', 'Director eliminado exitosamente.');
    }
}
