<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'referencia' => 'PLAN_NIÑOS_1',
            'nombre' => 'Niños',
            'descripcion' => 'Plan para niños',
            'dias' => 30,
            'precio' => 70000,
        ]);
        Plan::create([
            'referencia' => 'PLAN_CALENDARIO_2',
            'nombre' => 'Mes Calendario',
            'descripcion' => 'Plan para mes calendario',
            'dias' => 30,
            'precio' => 100000,
            'popular' => true,
        ]);
        Plan::create([
            'referencia' => 'PLAN_SEMANA_3',
            'nombre' => 'Semana',
            'descripcion' => 'Plan para semana',
            'dias' => 8,
            'precio' => 40000,
        ]);
        Plan::create([
            'referencia' => 'PLAN_FICHA_4',
            'nombre' => 'Ficha',
            'descripcion' => 'Plan para ficha',
            'dias' => 30,
            'precio' => 85000,
        ]);
        Plan::create([
            'referencia' => 'PLAN_CLASE_5',
            'nombre' => 'Clase',
            'descripcion' => 'Plan para clase',
            'dias' => 1,
            'precio' => 8000,
        ]);
    }
}
