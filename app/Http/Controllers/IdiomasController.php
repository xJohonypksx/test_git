<?php

namespace App\Http\Controllers;

use App\Models\Idiomas;
use Illuminate\Http\Request;

class IdiomasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(view:'idiomas.index');//
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
    public function show(Idiomas $idiomas)
    {
        return"HOLA DESDE SHOW";//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idiomas $idiomas)
    {
        return"HOLA DESDE EDIT";//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idiomas $idiomas)
    {
       return"HOLA DESDE UPDATE"; //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idiomas $idiomas)
    {
        return"HOLA DESDE DESTROY";//
    }
}
