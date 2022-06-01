<?php

namespace App\Http\Livewire;

use App\Models\Rendimiento;
use Livewire\Component;

class RendimientoComponent extends Component
{
    public function render()
    {
        $rendimientos = Rendimiento::paginate(8);
        return view('livewire.rendimiento-component', compact('rendimientos'));
    }
}
