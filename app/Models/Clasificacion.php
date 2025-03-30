<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    use HasFactory;

    protected $table = 'clasificacion';//nombre de la tabla
    protected $fillable = ['nom_clasificacion'];//columna que se puede llenar
    public $timestamps = false;
}
