<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Plan;
use App\Models\PlanUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class PagoController extends Controller
{
    public function planes()
    {
        $planes = Plan::all();
        return view('pagos.precios', compact('planes'));
    }

    public function payment(Plan $plan)
    {
        $reference = $plan->referencia.'_'.time();
        $url_redirect = route('respuesta', $plan);
        $public_key = env('KEY_PUB_WOMPI');
        $private_key = env('KEY_PRI_WOMPI');
        $integridad = env('INTEGRIDAD_WOMPI');
        $amount_in_cents = $plan->precio . '00';
        $signature = hash('sha256', $reference . $amount_in_cents . 'COP' . $integridad);

        return view('pagos.payment', compact('plan', 'reference', 'url_redirect', 'public_key', 'private_key', 'signature', 'amount_in_cents'));
    }

    public function respuesta(Request $request, Plan $plan)
    {
        $respuesta = Http::get('https://sandbox.wompi.co/v1/transactions/' . $request->id )->json();

        $data = $respuesta['data'];

        $data_encode = json_encode($data);

        switch ($data['status']) {

            case 'PENDING':
                $status = 'Pendiente';
                Pago::create([
                    'usuario_id' => auth()->user()->id,
                    'plan_id' => $plan->id,
                    'contenido' => $data_encode,
                    'status' => $status,
                ]);
                session()->flash('flash.banner', 'Pago pendiente');
                session()->flash('flash.bannerStyle', 'success');
                return redirect()->route('planes.precios');
                break;
            
            case 'APPROVED':
                $status = 'Aprobado';
                Pago::create([
                    'usuario_id' => auth()->user()->id,
                    'plan_id' => $plan->id,
                    'contenido' => $data_encode,
                    'status' => $status,
                ]);

                PlanUser::create([
                    'user_id' => auth()->user()->id,
                    'plan_id' => $plan->id,
                    'fecha_inicio' => now(),
                    'fecha_fin' => now()->addDays($plan->dias),
                ]);

                session()->flash('flash.banner', 'Pago aprobado, ahora estás en el plan ' . $plan->nombre);
                session()->flash('flash.bannerStyle', 'success');
                return redirect()->route('user.planes');
                break;

            case 'DECLINED':
                $status = 'Declinado';
                Pago::create([
                    'usuario_id' => auth()->user()->id,
                    'plan_id' => $plan->id,
                    'contenido' => $data_encode,
                    'status' => $status,
                ]);
                session()->flash('flash.banner', 'El pago ha sido rechazado');
                session()->flash('flash.bannerStyle', 'danger');
                return redirect()->route('planes.precios');
                break;

            case 'ERROR':
                $status = 'Error';
                Pago::create([
                    'usuario_id' => auth()->user()->id,
                    'plan_id' => $plan->id,
                    'contenido' => $data_encode,
                    'status' => $status,
                ]);
                session()->flash('flash.banner', 'Ha ocurrido un error');
                session()->flash('flash.bannerStyle', 'danger');
                return redirect()->route('planes.precios');
                break;

            case 'VOIDED':
                $status = 'Anulado';
                Pago::create([
                    'usuario_id' => auth()->user()->id,
                    'plan_id' => $plan->id,
                    'contenido' => $data_encode,
                    'status' => $status,
                ]);
                session()->flash('flash.banner', 'El pago ha sido anulado');
                session()->flash('flash.bannerStyle', 'danger');
                return redirect()->route('planes.precios');
                break;
            
            default:
                break;
        }
    }
}
