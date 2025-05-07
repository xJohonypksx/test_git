<?php

namespace App\Http\Controllers;

use App\Models\Dia;
use Illuminate\Http\Request;

class DiaController extends Controller
{
    /**
     * Muestra una lista de todos los días.
     */
    public function index()
    {
        $dias = Dia::all();
        return view('dia.index', compact('dias')); // corregido: carpeta y vista en singular
    }

    /**
     * Muestra el formulario para crear un nuevo día.
     */
    public function create()
    {
        return view('dia.create'); // corregido: carpeta y vista en singular
    }

    /**
     * Almacena un nuevo día en la base de datos.
     */
    public function store(Request $request)
    {
        Dia::create([
            'ID_Persona' => $request->ID_Persona,
        ]);

        return redirect()->route('dia.index'); // corregido: nombre de ruta en singular
    }

    /**
     * Muestra un día específico.
     */
    public function show(Dia $dia)
    {
        return view('dia.show', compact('dia')); // corregido: carpeta y vista en singular
    }

    /**
     * Muestra el formulario para editar un día existente.
     */
    public function edit(Dia $dia)
    {
        return view('dia.edit', compact('dia')); // corregido: carpeta y vista en singular
    }

    /**
     * Actualiza un día existente en la base de datos.
     */
    public function update(Request $request, Dia $dia)
    {
        $dia->update([
            'ID_Persona' => $request->ID_Persona,
        ]);

        return redirect()->route('dia.index'); // corregido: nombre de ruta en singular
    }

    /**
     * Elimina un día de la base de datos.
     */
    public function destroy($id)
    {
        $dia = Dia::findOrFail($id);
        $dia->delete();

        return redirect()->route('dia.index'); // corregido: nombre de ruta en singular
    }
}
