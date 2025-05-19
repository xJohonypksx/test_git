<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelicula extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'peliculas';
    protected $primaryKey = 'id_pelicula';
    protected $fillable = [
        'titulo',
        'id_clasificacion',
        'id_genero',
        'id_idioma',
        'id_director',
        // Agrega aquí cualquier otro campo que necesites
    ];

    /**
     * Relación con el modelo Clasificacion
     */
    public function clasificacion()
    {
        return $this->belongsTo(Clasificacion::class, 'id_clasificacion');
    }

    /**
     * Relación con el modelo Genero
     */
    public function genero()
    {
        return $this->belongsTo(Genero::class, 'id_genero');
    }

    /**
     * Relación con el modelo Idioma
     */
    public function idioma()
    {
        return $this->belongsTo(Idioma::class, 'id_idioma');
    }

    /**
     * Relación con el modelo Director
     */
    public function director()
    {
        return $this->belongsTo(Director::class, 'id_director');
    }

    /**
     * Obtener los horarios de la película
     * (Si tienes una relación con horarios/proyecciones)
     */
    public function horarios()
    {
        return $this->hasMany(Horario::class, 'id_pelicula');
    }
}
