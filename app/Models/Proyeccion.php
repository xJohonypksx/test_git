<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyeccion extends Model
{
    protected $table = 'proyecciones';
    protected $primaryKey = 'id_proyeccion';
    public $timestamps = false;

    protected $fillable = ['desc_proy', 'precio'];
}
