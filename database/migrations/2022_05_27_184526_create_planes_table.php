<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('planes', function (Blueprint $table) {
            $table->id();
            $table->string('referencia');
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('dias');
            $table->boolean('popular')->default(false);
            $table->integer('precio');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('planes');
    }
};
