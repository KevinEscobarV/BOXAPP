<?php

namespace App\Http\Livewire;

use App\Models\Rendimiento;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class RendimientoComponent extends Component
{
    use Actions;
    use WithPagination;

    public $edit_form = [];
    public $open = false;

    public $rules = [
        'edit_form.*' => 'required|numeric',
        'edit_form.created_at' => 'required|date',
        'edit_form.updated_at' => 'required|date',
    ];

    public function edit($rendimiento)
    {
        $rendimiento = Rendimiento::find($rendimiento)->withOutRelations();
        $this->open = true;
        $this->edit_form = $rendimiento->toArray();
    }

    public function update()
    {
        $this->validate();
        $rendimiento = Rendimiento::find($this->edit_form['id']);
        $rendimiento->update($this->edit_form);
        $this->reset('edit_form', 'open');
        $this->notification()->success(
            $title = 'Rendimiento actualizado',
            $description = 'El rendimiento ha sido actualizado correctamente'
        );
    }

    public function delete($id)
    {
        $rendimiento = Rendimiento::find($id);
        $rendimiento->delete();
        $this->notification()->success(
            $title = 'Rendimiento eliminado',
            $description = 'El rendimiento ha sido eliminado correctamente'
        );
    }

    public function render()
    {
        $rendimientos = Rendimiento::paginate(8);

        return view('livewire.rendimiento-component', compact('rendimientos'));
    }
}
