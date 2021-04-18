<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecicladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reciclados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('transporte');
            $table->string('objeto');
            $table->date('fecha_contacto')->nullable();
            $table->date('fecha_recoleccion')->nullable();
            $table->foreignId('ciudadano_id')->constrained();
            $table->foreignId('recolector_id')->constrained('ciudadanos');
            $table->foreignId('centro_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reciclados');
    }
}
