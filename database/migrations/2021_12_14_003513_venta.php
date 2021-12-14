<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Venta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table)
        {
            $table->id();
           
            $table->foreignId('id_auto')->constrained('auto')->references('id');
            $table->foreignId('id_cliente')->constrained('cliente')->references('id');
            $table->foreignId('id_empleado')->constrained('empleado')->references('id');
            $table->string('Fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
