<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesComponent extends Component
{
    use WithPagination;

    protected $queryString =['search' => ['except' => '']];
    public $search = '';
    public $perPage = 5;
    public $open = false;
    public $editPermisos = [];

    public $form = [
        'name' => '',
        'permissions' => [],
    ];

    public $editRol = [];

    protected $rules = [
        'form.name' => 'required|string|max:255',
        'form.permissions' => 'required|array',
    ];

    protected $validationAttributes = [
        'form.name' => 'nombre',
        'form.permissions' => 'permisos',
    ];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function save()
    {
        $this->validate();
        $rol = Role::create([
            'name' => $this->form['name'],
            'guard_name' => 'web',
        ]);
        $rol->syncPermissions($this->form['permissions']);
        $this->reset('form');
        $this->emit('saved');
    }

    public function edit(Role $rol)
    {
        $this->editRol = $rol->toArray();
        $this->editPermisos = $rol->permissions->pluck('id')->toArray();
        $this->open = true;
    }

    public function update()
    {
        $this->validate([
            'editRol.name' => 'required|string|max:255',
            'editPermisos' => 'required|array',
        ]);

        $rol = Role::find($this->editRol['id']);
        $rol->update([
            'name' => $this->editRol['name'],
        ]);
        $rol->syncPermissions($this->editPermisos);
        $this->reset('editRol', 'editPermisos', 'open');
    }


    public function render()
    {
        $permisos = Permission::all();

        $roles = Role::where('name', 'like', '%' . $this->search . '%')
        ->paginate($this->perPage);

        return view('livewire.roles-component', compact('roles', 'permisos'));
    }
}
