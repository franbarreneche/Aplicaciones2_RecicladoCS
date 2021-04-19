<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentroCiudadanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centro_ciudadano', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('centro_id')->constrained()->onDelete('cascade');
            $table->foreignId('ciudadano_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centro_ciudadano');
    }
}
