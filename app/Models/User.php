<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'apellido',
        'identificacion',
        'fecha_nacimiento',
        'estado',
        'email',
        'password',
        'grupo_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];

    // FECHA DE NACIMIENTO CARBON
    public function getFechaNacimientoCarbonAttribute()
    {
        return \Carbon\Carbon::parse($this->fecha_nacimiento);
    }

    // RELACION DE USUARIO CON PERFIL
    public function perfil()
    {
        return $this->hasOne(PerfilUsuario::class, 'usuario_id');
    }

    // RELACION CON RENDIMIENTO
    public function rendimiento()
    {
        return $this->hasOne(Rendimiento::class, 'usuario_id');
    }

    // RELACION DE USUARIO CON GRUPO
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }   

    // RELACION DE USUARIO CON PAGOS
    public function pagos()
    {
        return $this->hasMany(Pago::class, 'usuario_id');
    }

    // RELACION DE USUARIO CON PLANES
    public function planes()
    {
        return $this->belongsToMany(Plan::class, 'plan_users', 'user_id', 'plan_id')->withPivot('fecha_inicio', 'fecha_fin', 'status');
    }
}
