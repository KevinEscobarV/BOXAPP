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
        // \App\Models\User::factory(100)->create();
        \App\Models\PerfilUsuario::factory(100)->create();

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            EnfermedadSeeder::class,
        ]);

        $perfiles = \App\Models\PerfilUsuario::all();
        foreach ($perfiles as $perfil) {
            $perfil->enfermedades()->attach([1,2,3]);
        }
    }
}
