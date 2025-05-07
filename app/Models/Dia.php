<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dia extends Model
{
    use SoftDeletes;

    protected $table = 'dias';
    protected $primaryKey = 'id_dia';
    protected $fillable = ['descripcion_dia'];
}

