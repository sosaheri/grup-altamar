<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remesas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('RemFechaDeposito');
            $table->dateTime('RemHoraDeposito');
            $table->string('RemBanco');
            $table->integer('RemNumRef')->unique();
            $table->string('RemOficina');
            $table->string('RemBene');
            $table->integer('RemMonto');
            $table->integer('Remtasa');
            $table->string('RemBancoRec');
            $table->string('operador');
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
        Schema::dropIfExists('remesas');
    }
}
