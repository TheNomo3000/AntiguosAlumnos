<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('cod_evento');
            $table->longText('contenido');
            $table->integer('cod_promocion')->unsigned();
            $table->timestamps();
            $table->binary('publicado');
            /*$table->foreign('cod_promocion')
                  ->references('cod_promocion')
                  ->on('promociones');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
