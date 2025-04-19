<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('idiomas', function (Blueprint $table) {
            $table->increments('id_idioma'); // Aquí se define como auto_increment
            $table->string('desc_idioma')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('idiomas');
    }
};
