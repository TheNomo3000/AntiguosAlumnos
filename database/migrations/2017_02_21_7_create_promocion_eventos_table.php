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
            $table->integer('cod_promocion')->unsigned();
            $table->primary(['cod_evento','cod_promocion']);
            $table->foreign('cod_promocion')
                ->references('cod_promocion')
                ->on('promociones');
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
