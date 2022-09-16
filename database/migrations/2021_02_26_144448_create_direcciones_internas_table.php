<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones_internas', function (Blueprint $table) {
            $table->id();
            $table->boolean("prioridad")->default(false);
            $table->string("descripcion");
            $table->unsignedBigInteger("padre");
            $table->boolean("status")->default(true);   
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
        Schema::dropIfExists('direccion_internas');
    }
};
