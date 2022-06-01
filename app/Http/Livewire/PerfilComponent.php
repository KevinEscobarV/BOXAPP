<?php

namespace App\Http\Livewire;

use App\Models\Enfermedades;
use App\Models\PerfilUsuario;
use Livewire\Component;
use WireUi\Traits\Actions;

class PerfilComponent extends Component
{
    use Actions;

    public $frecuencia = []; // Frecuencia de consumo
    public $enfermedades = []; // array de enfermedades
    
    public $enfermedadesUser = []; // array de enfermedades del usuario
    public $editEnfermedades = []; // array de enfermedades a editar

    public $open = false;

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
    ]; // Inputs

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
    ]; // Inputs

    public $rules = [
        'enfermedadesUser' => 'required',
        'input.fecha_ingreso' => 'required|date',
        'input.cirugias' => 'nullable|string',
        'input.dolores' => 'nullable|string',
        'input.fuma' => 'required|boolean',
        'input.licor' => 'required',
        'input.drogas' => 'required',
        'input.act_fisica' => 'required',
        'input.otras_act_fisica' => 'required|string',
        'input.fecha_ultima_act_fisica' => 'required|date|before_or_equal:today',
    ]; // Reglas

    public $edit_rules = [
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
    ]; // Reglas

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
        'editEnfermedades' => 'Enfermedades',
        'editPerfil.fecha_ingreso' => 'Fecha de ingreso',
        'editPerfil.cirugias' => 'Cirugías',
        'editPerfil.dolores' => 'Dolores',
        'editPerfil.fuma' => 'Fuma',
        'editPerfil.licor' => 'Consumo de licor',
        'editPerfil.drogas' => 'Consumo de drogas',
        'editPerfil.act_fisica' => 'Actividad física',
        'editPerfil.otras_act_fisica' => 'Otras actividades físicas',
        'editPerfil.fecha_ultima_act_fisica' => 'Fecha de última actividad física',
    ]; // Atributos de validación

    public function mount()
    {
        $this->frecuencia = [
            ['id' => '1', 'name' => 'Nunca'],
            ['id' => '2', 'name' => 'Esporadicamente'],
            ['id' => '3', 'name' => 'Eventualmente'],
            ['id' => '4', 'name' => 'Regularmente'],
            ['id' => '5', 'name' => 'Siempre'],
        ];

        // Se usa esta forma para evitar que Livewire actualice estos valores en cada solicitud. Poner todo como una matriz
        $this->enfermedades = Enfermedades::query()->select('id', 'nombre')->get()->toArray();
    }

    public function save()
    {
        $this->validate( $this->rules );
        $user = auth()->user();
        $this->input['usuario_id'] = $user->id;
        $perfil = PerfilUsuario::create($this->input);
        $perfil->enfermedades()->sync($this->enfermedadesUser);
        $this->reset('input', 'enfermedadesUser');

        $this->notification()->success(
            $title = 'Perfil creado',
            $description = 'Tu perfil ha sido creado con éxito'
        );
    }

    public function edit(PerfilUsuario $perfil)
    {
        $this->open = true;
        $this->editPerfil = $perfil->toArray();
        $this->editEnfermedades = $perfil->enfermedades->pluck('id')->toArray();
    }

    public function update()
    {
        $this->validate( $this->edit_rules );
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
        $datos = auth()->user()->perfil;
        return view('livewire.perfil-component', compact('datos'));
    }
}
