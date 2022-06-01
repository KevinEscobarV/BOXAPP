<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'planes';
    protected $fillable = ['referencia', 'nombre', 'descripcion', 'dias', 'precio', 'popular'];
    
    use HasFactory;

    //RELACION CON USUARIOS
    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'plan_users', 'plan_id', 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'nombre';
    }

}
