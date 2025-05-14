<?php

namespace App\Http\Controllers;

use App\Models\Hora;
use Illuminate\Http\Request;

class HoraController extends Controller
{
    public function index()
    {
        $horas = Hora::withTrashed()->latest()->paginate(10); // Paginación y softdeletes
        return view('horas.index', compact('horas'));
    }

    public function create()
    {
        return view('horas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'descripcion_h' => 'required|unique:horas|max:100'
        ], [
            'descripcion_h.required' => 'La descripción es obligatoria',
            'descripcion_h.unique' => 'Esta hora ya existe'
        ]);

        Hora::create($validated);

        return redirect()->route('horas.index')
            ->with('success', 'Hora creada exitosamente');
    }

    public function edit(Hora $hora)
    {
        return view('horas.edit', compact('hora'));
    }

    public function update(Request $request, Hora $hora)
    {
        $validated = $request->validate([
            'descripcion_h' => 'required|max:100|unique:horas,descripcion_h,'.$hora->id_hora.',id_hora'
        ]);

        $hora->update($validated);

        return redirect()->route('horas.index')
            ->with('success', 'Hora actualizada correctamente');
    }

    public function destroy(Hora $hora)
    {
        $hora->delete();
        return redirect()->route('horas.index')
            ->with('success', 'Hora desactivada temporalmente');
    }

    // Método adicional para restauración (si necesitas soft delete)
    public function restore($id_hora)
    {
        Hora::withTrashed()->find($id_hora)->restore();
        return redirect()->back()->with('success', 'Hora restaurada');
    }
}
