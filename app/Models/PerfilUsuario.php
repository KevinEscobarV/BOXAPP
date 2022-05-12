<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilUsuario extends Model
{
    use HasFactory;
    const nunca = 1, esporadicamente = 2, eventualmente = 3, regularmente = 4, siempre = 5;

    // RELACION PERFIL CON USUARIO
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
