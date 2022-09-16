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
        Schema::create('ubicaciones_internas', function (Blueprint $table) {
            $table->id();
            $table->text("direccion_larga");
            $table->unsignedBigInteger('direccion_interna_id');
            $table->foreign('direccion_interna_id')->references('id')->on('direcciones_internas');
            $table->unsignedBigInteger('disponibilidad_id');
            $table->foreign('disponibilidad_id')->references('id')->on('disponibilidades');
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
        Schema::dropIfExists('ubicacion_internas');
    }
};
