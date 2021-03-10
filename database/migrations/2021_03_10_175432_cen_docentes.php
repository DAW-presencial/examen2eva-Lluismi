<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CenDocentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cen_docentes', function (Blueprint $table) {
            $table->id();
            $table->string("denominacion");
            $table->string("codigo");
            $table->string("CIF");
            $table->enum("titularidad", ["publica", "privado", "concertado"])->nullable();;
            $table->string("dir_postal");
            $table->integer("cp");
            $table->string("director_nom");
            $table->string("director_apel1");
            $table->string("director_apel2");
            $table->string("identificada");
            $table->enum("tipo_identificada", ["nif", "nie", "pasaporte"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cen_docentes');
    }
}
