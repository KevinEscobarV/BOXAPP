<?php

use App\Models\PerfilUsuario;
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
        Schema::create('perfil_usuarios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_ingreso');
            $table->string('Problema_vasculares_respiratorio');
            $table->boolean('cirugias')->default(false);
            $table->integer('cant_cirguias')->nullable();
            $table->boolean('dolores')->default(false);
            $table->integer('cant_dolores')->nullable();
            $table->boolean('fuma')->default(false);
            $table->enum('licor', [PerfilUsuario::nunca, PerfilUsuario::esporadicamente, PerfilUsuario::eventualmente, PerfilUsuario::regularmente, PerfilUsuario::siempre])->default(PerfilUsuario::nunca);
            $table->enum('drogas', [PerfilUsuario::nunca, PerfilUsuario::esporadicamente, PerfilUsuario::eventualmente, PerfilUsuario::regularmente, PerfilUsuario::siempre])->default(PerfilUsuario::nunca);
            $table->enum('act_fisica', [PerfilUsuario::nunca, PerfilUsuario::esporadicamente, PerfilUsuario::eventualmente, PerfilUsuario::regularmente, PerfilUsuario::siempre])->default(PerfilUsuario::nunca);
            $table->string('otras_act_fisica')->nullable();
            $table->date('fecha_ultima_act_fisica')->nullable();
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
        Schema::dropIfExists('perfil_usuarios');
    }
};
