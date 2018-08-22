<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncomiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encomiendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NombreyApellidoRemitente');
            $table->string('DocumentodeIdentidadRemitente');
            $table->string('TelefonodeRemitente');
            $table->integer('NumerodeCorrelativo')->unique();
            $table->date('fechaRecepcion');
            $table->text('descripcion');
            $table->integer('PesoEncomienda');
            $table->string('NombreyApellidoReceptor');
            $table->string('DocumentodeIdentidadReceptor');
            $table->string('TelefonoReceptor');
            $table->string('DireccionRetiro');
            $table->date('FechaDeSalida');
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
        Schema::dropIfExists('encomiendas');
    }
}
