<?php

namespace App\Http\Controllers;


use App\Models\Idioma;

use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $idiomas = Idioma::all();
        return view('idioma.index', compact('idiomas'));
        //dd($idiomas);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('idioma.create');//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Idioma::create([
            "desc_idioma"=>$request->desc_idioma,
        ]);
        return redirect()->route('idioma.index');
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





