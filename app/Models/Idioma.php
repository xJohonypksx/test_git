<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Idioma extends Model
{

    protected $table = 'idiomas';

    protected $primaryKey = 'id_idioma';

    protected $fillable = ["desc_idioma"];
}

