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
        Schema::create('seriales', function (Blueprint $table) {
            $table->id();
            $table->string("descripcion");
            $table->unsignedBigInteger('tipo_serial_id');
            $table->foreign('tipo_serial_id')->references('id')->on('tipos_seriales');
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
        Schema::dropIfExists('seraials');
    }
};
