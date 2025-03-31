<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;
use function Sodium\add;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ciudades = Ciudad::all();
        //add($ciudades);
        return view('ciudad.index',compact("ciudades"));//
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Hola desde create";//
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Hola desde store";//
    }

    /**
     * Display the specified resource.
     */
    public function show(Ciudad $ciudad)
    {
        return "Hola desde show";//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ciudad $ciudad)
    {
        return "Hola desde edit";//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ciudad $ciudad)
    {
        return "Hola desde update";//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ciudad $ciudad)
    {
        return "Hola desde destroy";//
    }
}
