<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    use HasFactory;

    protected $table = 'clasificaciones'; // Especifica el nombre correcto de la tabla
    protected $primaryKey = 'id_clasificacion';
    protected $fillable = ['nombre_clasifi'];

    public function peliculas()
    {
        return $this->hasMany(Pelicula::class, 'id_clasificacion');
    }
}
// Modelo Genero
class Genero extends Model
{
    protected $primaryKey = 'id_genero';
    protected $fillable = ['desc_genero'];

    public function peliculas()
    {
        return $this->hasMany(Pelicula::class, 'id_genero');
    }
}

// Modelo Idioma
class Idioma extends Model
{
    protected $primaryKey = 'id_idioma';
    protected $fillable = ['desc_idioma'];

    public function peliculas()
    {
        return $this->hasMany(Pelicula::class, 'id_idioma');
    }
}

// Modelo Director
class Director extends Model
{
    protected $primaryKey = 'id_director';
    protected $fillable = ['id_persona'];

    public function peliculas()
    {
        return $this->hasMany(Pelicula::class, 'id_director');
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }
}
