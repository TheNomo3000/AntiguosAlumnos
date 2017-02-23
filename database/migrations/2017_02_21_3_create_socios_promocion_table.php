<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSociosPromocionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios_promocion', function (Blueprint $table) {
            /*$table->mediuminteger('cod_socio')->unsigned();*/
            $table->integer('cod_promocion')->unsigned();
            $table->primary(['cod_socio','cod_promocion']);
            $table->foreign('cod_promocion')
                ->references('cod_promocion')
                ->on('promociones');

            $table->foreign('cod_socio')
                  ->references('cod_socio')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socios_promocion');
    }
}
