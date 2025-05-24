<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'directores'; // si tu tabla no se llama 'directors'
    protected $primaryKey = 'id_director';
    public $timestamps = false;

    protected $fillable = ['id_persona'];
}
