<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    protected $table = 'horas';
    protected $primaryKey = 'id_hora';
    protected $fillable = ["descripcion_h"];
    //
}
