<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    protected $table = 'dias';
    protected $primaryKey = 'id_dia';
    public $timestamps = false;

    protected $fillable = ['desc_dia'];

}
