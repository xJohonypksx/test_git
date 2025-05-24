<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('persona.index', compact('personas'));
    }

    public function create()
    {
        return view('persona.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:100',
            'ap'  => 'required|string|max:100',
            'am'  => 'required|string|max:100',
        ]);

        Persona::create($request->only('nom', 'ap', 'am'));

        return redirect()->route('personas.index')->with('success', 'Persona creada correctamente.');
    }

    public function show(Persona $persona)
    {
        return view('persona.show', compact('persona'));
    }

    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('persona.edit', compact('persona'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:100',
            'ap'  => 'required|string|max:100',
            'am'  => 'required|string|max:100',
        ]);

        $persona = Persona::findOrFail($id);
        $persona->update($request->only('nom', 'ap', 'am'));

        return redirect()->route('personas.index')->with('success', 'Persona actualizada correctamente.');
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('success', 'Persona eliminada correctamente.');
    }
}
