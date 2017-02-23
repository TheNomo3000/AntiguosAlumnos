<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromocionEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocion_eventos', function (Blueprint $table) {
            $table->integer('cod_evento')->unsigned();
            $table->integer('cod_estudios')->unsigned();
            $table->smallinteger('anio');
            $table->primary(['cod_evento','cod_estudios','anio']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promocion_eventos');
    }
}
