<?php

namespace App\Http\Livewire;

use App\Models\Enfermedades;
use App\Models\PerfilUsuario;
use Livewire\Component;
use WireUi\Traits\Actions;

class PerfilComponent extends Component
{
    use Actions;

    public $perfilUsuario;

    public $open = false;

    public $enfermedadesUser = [];
    public $editEnfermedades = [];

    public $input = [
        'fecha_ingreso' => '',
        'cirugias' => '',
        'dolores' => '',
        'fuma' => false,
        'licor' => '',
        'drogas' => '',
        'act_fisica' => '',
        'otras_act_fisica' => '',
        'fecha_ultima_act_fisica' => '',
        'usuario_id' => '',
    ];

    public $editPerfil = [
        'fecha_ingreso' => '',
        'cirugias' => '',
        'dolores' => '',
        'fuma' => '',
        'licor' => '',
        'drogas' => '',
        'act_fisica' => '',
        'otras_act_fisica' => '',
        'fecha_ultima_act_fisica' => '',
        'usuario_id' => '',
    ];

    public $rules = [
        'enfermedadesUser' => 'required',
        'input.fecha_ingreso' => 'required|date',
        'input.cirugias' => 'nullable|string',
        'input.dolores' => 'nullable|string',
        'input.fuma' => 'boolean',
        'input.licor' => 'required',
        'input.drogas' => 'required',
        'input.act_fisica' => 'required',
        'input.otras_act_fisica' => 'nullable|string',
        'input.fecha_ultima_act_fisica' => 'nullable|date',
    ];

    public $validationAttributes = [
        'enfermedadesUser' => 'Enfermedades',
        'input.fecha_ingreso' => 'Fecha de ingreso',
        'input.cirugias' => 'Cirugías',
        'input.dolores' => 'Dolores',
        'input.fuma' => 'Fuma',
        'input.licor' => 'Consumo de licor',
        'input.drogas' => 'Consumo de drogas',
        'input.act_fisica' => 'Actividad física',
        'input.otras_act_fisica' => 'Otras actividades físicas',
        'input.fecha_ultima_act_fisica' => 'Fecha de última actividad física',
    ];

    public function save()
    {
        $this->validate();
        $user = auth()->user();
        $this->input['usuario_id'] = $user->id;
        $perfil = PerfilUsuario::create($this->input);
        $perfil->enfermedades()->sync($this->enfermedadesUser);
        $this->reset('input', 'enfermedadesUser');
        $this->emit('perfilSaved');
        $this->notification()->success(
            $title = 'Perfil creado',
            $description = 'Tu perfil ha sido creado con éxito'
        );
    }

    public function edit(PerfilUsuario $perfil)
    {
        $this->open = true;

        $this->editPerfil = $perfil->toArray();

        $this->editPerfil['licor'] = intval($perfil->licor);
        $this->editPerfil['drogas'] = intval($perfil->drogas);
        $this->editPerfil['act_fisica'] = intval($perfil->act_fisica);

        $this->editEnfermedades = $perfil->enfermedades->pluck('id')->toArray();

        $this->editEnfermedades = array_map('strval', $this->editEnfermedades);
    }

    public function update()
    {
        $this->validate([
            'editEnfermedades' => 'required',
            'editPerfil.fecha_ingreso' => 'required|date',
            'editPerfil.cirugias' => 'nullable|string',
            'editPerfil.dolores' => 'nullable|string',
            'editPerfil.fuma' => 'boolean',
            'editPerfil.licor' => 'required',
            'editPerfil.drogas' => 'required',
            'editPerfil.act_fisica' => 'required',
            'editPerfil.otras_act_fisica' => 'required|string',
            'editPerfil.fecha_ultima_act_fisica' => 'nullable|date',
        ]);
        $perfil = PerfilUsuario::find($this->editPerfil['id']);

        $perfil->update($this->editPerfil);

        $perfil->enfermedades()->sync($this->editEnfermedades);

        $this->reset('editPerfil', 'editEnfermedades', 'open');
        
        $this->notification()->success(
            $title = 'Perfil actualizado',
            $description = 'Tu perfil ha sido actualizado correctamente'
        );

    }

    public function render()
    {
        $enfermedades = Enfermedades::all();
        $datos = auth()->user()->perfil;
        return view('livewire.perfil-component', compact('datos', 'enfermedades'));
    }
}
