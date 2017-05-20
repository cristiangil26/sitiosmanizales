<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSitios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('direccion',100)->nullable();
            $table->string('latitud',50);
            $table->string('longitud',50);
            $table->string('telefono',20)->nullable();
            $table->string('correo',150)->nullable();
            $table->string('paginaweb',140)->nullable();
            $table->enum('tipo',['Hospital','Restaurante','Peluquería','Mensajería','Bar','Discoteca','Supermercado','Banco']);
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
        Schema::dropIfExists('sitios');
    }
}
