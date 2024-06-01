<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id('id');  
            $table->unsignedBigInteger('idMarca');
            $table->unsignedBigInteger('idCliente');
            $table->string('tipoEquipo', 45)->nullable();
            $table->string('modelo', 45)->nullable();
            $table->string('numeroSerie', 45)->nullable();
            $table->timestamps();

            $table->foreign('idMarca')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('idCliente')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
