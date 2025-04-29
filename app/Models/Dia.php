<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    use softDeletes;

    protected $table = 'dias';
    protected $primaryKey = 'id_dia';
    protected $fillable = ["descripcion_dia"];
    //
}
