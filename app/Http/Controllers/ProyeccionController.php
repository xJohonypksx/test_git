<?php


namespace App\Http\Controllers;

use App\Models\Proyecciones;
use Illuminate\Http\Request;

class ProyeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyeciones = [
            (object)[
                'id_proyeccion' => 1,
                'desc_proy' => 'Proyección 1',
                'precio' => 100.00
            ],
            (object)[
                'id_proyeccion' => 2,
                'desc_proy' => 'Proyección 2',
                'precio' => 150.00
            ]
        ];
        return view('proyeccion.index', compact('proyeciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyeccion.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos de la solicitud
        $validated = $request->validate([
            'desc_proy' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);

        // Crear la nueva proyección
        Proyeccion::create($validated);

        // Redirige a la lista de proyecciones con un mensaje de éxito
        return redirect()->route('proyecciones.index')->with('success', 'Proyección creada exitosamente');
    }


    /**
     * Display the specified resource.
     */
    public function show(proyecciones $proyecciones)
    {
        //}
        return redirect()->route('proyeccion.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyeccion $proyeccion)
    {
        return view('proyeccion.edit', compact('proyeccion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyeccion $proyeccion)
    {
        // Valida los datos si es necesario, por ejemplo:
        $validated = $request->validate([
            'desc_proy' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);

        // Actualiza la proyección
        $proyeccion->update($validated);

        // Redirige a la lista de proyecciones
        return redirect()->route('proyecciones.index')->with('success', 'Proyección actualizada exitosamente');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyeccion $proyeccion)
    {
        $proyeccion->delete();

        return redirect()->route('proyecciones.index')->with('success', 'Proyección eliminada exitosamente');
    }

}

