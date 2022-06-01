<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilUsuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_ingreso',
        'cirugias',
        'dolores',
        'fuma',
        'licor',
        'drogas',
        'act_fisica',
        'otras_act_fisica',
        'fecha_ultima_act_fisica',
        'usuario_id',
    ];

    const nunca = 1, esporadicamente = 2, eventualmente = 3, regularmente = 4, siempre = 5;

    // RELACION PERFIL CON USUARIO
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    // RELACION PERFIL CON ENFERMEDADES
    public function enfermedades()
    {
        return $this->belongsToMany(Enfermedades::class, 'enfermedad_users', 'perfil_id', 'enfermedad_id');
    }

    // Para que el campo Fuma sea una palabra
    public function getFumaWordAttribute()
    {
        if ($this->fuma) {
            return 'Si';
        }else{
            return 'No';
        }
    }

    // Fecha de ingreso
    public function getFechaIngresoCarbonAttribute()
    {
        return \Carbon\Carbon::parse($this->fecha_ingreso);
    }

    // Fecha de última actividad física
    public function getFechaUltimaActFisicaCarbonAttribute()
    {
        return \Carbon\Carbon::parse($this->fecha_ultima_act_fisica);
    }

    // Para que el campo Licor sea una palabra
    public function getLicorWordAttribute()
    {
        switch ($this->licor) {
            case 1:
                return 'Nunca';
                break;
            case 2:
                return 'Esporádicamente';
                break;
            case 3:
                return 'Eventualmente';
                break;
            case 4:
                return 'Regularmente';
                break;
            case 5:
                return 'Siempre';
                break;
        }
    }

    // Para que el campo Drogas sea una palabra
    public function getDrogasWordAttribute()
    {
        switch ($this->drogas) {
            case 1:
                return 'Nunca';
                break;
            case 2:
                return 'Esporádicamente';
                break;
            case 3:
                return 'Eventualmente';
                break;
            case 4:
                return 'Regularmente';
                break;
            case 5:
                return 'Siempre';
                break;
        }
    }

    // Para que el campo Actividad Física sea una palabra
    public function getActFisicaWordAttribute()
    {
        switch ($this->act_fisica) {
            case 1:
                return 'Nunca';
                break;
            case 2:
                return 'Esporádicamente';
                break;
            case 3:
                return 'Eventualmente';
                break;
            case 4:
                return 'Regularmente';
                break;
            case 5:
                return 'Siempre';
                break;
        }
    }
}
