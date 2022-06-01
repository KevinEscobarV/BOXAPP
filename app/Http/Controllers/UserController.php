<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function planes()
    {
        $planes = auth()->user()->planes;
        return view('user.planes', compact('planes'));
    }

    public function pagos()
    {
        $pagos = Pago::where('usuario_id', auth()->user()->id)->paginate(10);
        return view('user.mispagos', compact('pagos'));
    }

    public function perfil()
    {
        return view('user.perfil');
    }
}
