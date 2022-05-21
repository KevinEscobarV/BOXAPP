<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermedades extends Model
{
    use HasFactory;

    protected $table = 'enfermedades';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    // RELACION ENFERMEDAD CON PERFIL USUARIO
    public function perfiles()
    {
        return $this->belongsToMany(PerfilUsuario::class, 'enfermedad_users','enfermedad_id', 'perfil_id');
    }
}
