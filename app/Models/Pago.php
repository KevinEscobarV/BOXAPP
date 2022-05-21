<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'contenido',
    ];

    //RELACION CON USUARIO
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
    
}
