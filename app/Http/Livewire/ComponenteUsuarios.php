<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ComponenteUsuarios extends Component
{
    use WithPagination;

    protected $listeners = ['cambiarEstado'];


    protected $queryString =['search' => ['except' => '']];
    public $search = '';
    public $perPage = 10;
    public $open = false;
    public $urlPhoto;

    public $show = [];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function mostrarUsuario(User $user){
        $this->open = true;
        $this->show = $user->toArray();
        $this->urlPhoto = $user->profile_photo_url;

    }

    public function cambiarEstado(User $user){
        $user->update(['estado' => !$user->estado]);
    }

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')
        ->orWhere('apellido', 'like', '%' . $this->search . '%')
        ->orWhere('identificacion', 'like', '%' . $this->search . '%')
        ->orWhere('email', 'like', '%' . $this->search . '%')
        ->paginate($this->perPage);

        return view('livewire.componente-usuarios', compact('users'));
    }
}
