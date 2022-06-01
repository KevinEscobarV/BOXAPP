<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id',
        'plan_id',
        'contenido',
        'status',
    ];

    //RELACION CON USUARIO
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    //RELACION CON PLAN
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
    
}
