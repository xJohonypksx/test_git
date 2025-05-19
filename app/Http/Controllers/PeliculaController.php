<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use App\Models\Clasificacion;
use App\Models\Genero;
use App\Models\Idioma;
use App\Models\Director;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{

    public function index()
    {
        $peliculas = Pelicula::join("clasificaciones","clasificaciones.id_clasificacion","=","peliculas.id_clasificacion")
        ->join("generos","generos.id_genero","=","peliculas.id_genero")
        ->join("idiomas","idiomas.id_idioma","=","peliculas.id_idioma")
        ->join("directores","directores.id_director","=","peliculas.id_director")
            ->join("personas","personas.id_persona","=","directores.id_persona")
        ->get();
        //Clasificacion
        //Genero
        //Idioma
        //Directores
        //dd($peliculas);

        return view('peliculas.index',data:compact("peliculas"));
        //
    }


    public function create()
    {
        $clasificaciones = Clasificacion::all();
        $generos = Genero::all();
        $idiomas = Idioma::all();
        $directores = Director::with('persona')->get();

        return view('peliculas.create', compact(
            'clasificaciones',
            'generos',
            'idiomas',
            'directores'
        ));
    }


    public function store(Request $request)
    {
        Pelicula::create([
            "titulo" => $request->titulo,
            // Asegúrate de incluir aquí todos los campos necesarios
            "id_clasificacion" => $request->id_clasificacion,
            "id_genero" => $request->id_genero,
            "id_idioma" => $request->id_idioma,
            "id_director" => $request->id_director
        ]);
        return redirect()->route('peliculas.index');
    }


    public function show(Pelicula $pelicula)
    {
        return "Hola desde show";//
    }


    public function edit(Pelicula $pelicula)
    {
        // Obtener todos los datos necesarios para los select
        $clasificaciones = Clasificacion::all();
        $generos = Genero::all();
        $idiomas = Idioma::all();
        $directores = Director::with('persona')->get();

        return view('peliculas.edit', compact(
            'pelicula',
            'clasificaciones',
            'generos',
            'idiomas',
            'directores'
        ));
    }


    public function update(Request $request, Pelicula $pelicula)
    {
        //dd($hora);
        $pelicula->update($request->all());
        return redirect()->route('peliculas.index');
    }


    public function destroy(Pelicula $pelicula)
    {
        //dd($hora);
        $pelicula->delete();
        return redirect()->route('peliculas.index');
    }
}
