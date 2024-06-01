<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id('id');  
            $table->date('fecha_recepcion')->nullable();
            $table->string('problema', 75)->nullable();
            $table->string('estado', 45)->nullable();
            $table->string('diagnostico', 45)->nullable();
            $table->string('solucion', 45)->nullable();
            $table->unsignedBigInteger('idTecnico');
            $table->unsignedBigInteger('idEquipo');
            $table->timestamps();

            $table->foreign('idTecnico')->references('id')->on('tecnicos')->onDelete('cascade');
            $table->foreign('idEquipo')->references('id')->on('equipos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
