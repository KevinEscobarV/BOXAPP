<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Heyder',
            'apellido' => 'Triana',
            'identificacion' => '123456789',
            'fecha_nacimiento' => '2000-07-31',
            'estado' => true,
            'email' => 'lifutsacas09@gmail.com',
            'password' => bcrypt('123456789'),
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Jhon',
            'apellido' => 'Fresneda',
            'identificacion' => '987654321',
            'fecha_nacimiento' => '1993-08-09',
            'estado' => true,
            'email' => 'jhon.jjfr@gmail.com',
            'password' => bcrypt('123456789'),
        ])->assignRole('Coach');
    }
}
