<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
use App\Models\Idioma;
=======

use App\Models\Idiomas;
>>>>>>> Stashed changes
use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< Updated upstream
        $idiomas = Idioma::all();
        return view('idioma.index', compact('idiomas'));
        //dd($idiomas);
=======
>>>>>>> Stashed changes

        return view('Idioma.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return"HOLA DESDE CREATE";//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return"HOLA DESDE REQUEST";//
    }

    /**
     * Display the specified resource.
     */
    public function show(Idioma $idiomas)
    {
        return"HOLA DESDE SHOW";//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idioma $idiomas)
    {
        return"HOLA DESDE EDIT";//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idioma $idiomas)
    {
       return"HOLA DESDE UPDATE"; //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idioma $idiomas)
    {
        return"HOLA DESDE DESTROY";//
    }
}





