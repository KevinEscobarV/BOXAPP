<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(100)->create();

        $users = \App\Models\User::all();
        foreach ($users as $user) {
            \App\Models\PerfilUsuario::factory()->create([
                'usuario_id' => $user->id,
            ]);
            \App\Models\Rendimiento::factory()->create([
                'usuario_id' => $user->id,
            ]);
        }

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            EnfermedadSeeder::class,
            PlanSeeder::class,
        ]);

        $perfiles = \App\Models\PerfilUsuario::all();
        foreach ($perfiles as $perfil) {
            $perfil->enfermedades()->attach([1,2,3]);
        }
    }
}
