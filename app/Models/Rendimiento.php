<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'peso',
        'bmi',
        'grasa',
        'musculo',
        'agua',
        'grasa_visceral',
        'huesos',
        'metabolismo',
        'proteina',
        'obesidad',
        'lbm',
        'abdomen_medio',
        'abdomen_bajo',
        'brazo_derecho',
        'brazo_izquierdo',
        'pierna_derecha',
        'pierna_izquierda',
        'usuario_id',
    ];

    // Relacion con usuario
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
