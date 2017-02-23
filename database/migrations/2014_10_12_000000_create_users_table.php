<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->mediumIncrements('cod_socio');
            $table->string('lugar_nacimiento')->nullable();
            $table->date('fecha_nacimiento');
            $table->integer('cp');
            $table->string('poblacion');
            $table->string('telefono',9)->nullable();
            $table->string('movil',9);
            $table->string('fax',9)->nullable();
            $table->string('direccion');
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
