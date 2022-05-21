<?php

namespace Database\Seeders;

use App\Models\Enfermedades;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnfermedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enfermedades = ['Ninguna', 'Abrasión corneal', 'Accidentes de tráfico', 'Accidentes eléctricos', 'Accidentes en el agua', 'Accidentes químicos'];
        
        foreach ($enfermedades as $enfermedad) {
            Enfermedades::create([
                'nombre' => $enfermedad,
            ]);
        }
    }
}
