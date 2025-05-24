<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $primaryKey = 'id_persona';
    public $timestamps = false;

    protected $fillable = ['nom', 'ap', 'am'];

    public function director()
    {
        return $this->hasOne(Director::class, 'id_persona');
    }
}

