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
        Schema::create('rendimientos', function (Blueprint $table) {
            $table->id();
            $table->float('peso');
            $table->float('bmi');
            $table->float('grasa');
            $table->float('musculo');
            $table->float('agua');
            $table->float('grasa_visceral');
            $table->float('huesos');
            $table->float('metabolismo');
            $table->float('proteina');
            $table->float('obesidad');
            $table->float('lbm');
            $table->float('abdomen_medio');
            $table->float('abdomen_bajo');
            $table->float('brazo_derecho');
            $table->float('brazo_izquierdo');
            $table->float('pierna_derecha');
            $table->float('pierna_izquierda');

            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('rendimientos');
    }
};
