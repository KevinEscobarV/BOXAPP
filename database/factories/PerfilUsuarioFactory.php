<?php

namespace Database\Factories;

use App\Models\PerfilUsuario;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PerfilUsuario>
 */
class PerfilUsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fecha_ingreso' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'Problema_vasculares_respiratorio' => $this->faker->sentence,
            'cirugias' => $this->faker->boolean,
            'cant_cirguias' => $this->faker->numberBetween(0, 10),
            'dolores' => $this->faker->boolean,
            'cant_dolores' => $this->faker->numberBetween(0, 10),
            'fuma' => $this->faker->boolean,
            'licor' => $this->faker->randomElement([PerfilUsuario::nunca, PerfilUsuario::esporadicamente, PerfilUsuario::eventualmente, PerfilUsuario::regularmente, PerfilUsuario::siempre]),
            'drogas' => $this->faker->randomElement([PerfilUsuario::nunca, PerfilUsuario::esporadicamente, PerfilUsuario::eventualmente, PerfilUsuario::regularmente, PerfilUsuario::siempre]),
            'act_fisica' => $this->faker->randomElement([PerfilUsuario::nunca, PerfilUsuario::esporadicamente, PerfilUsuario::eventualmente, PerfilUsuario::regularmente, PerfilUsuario::siempre]),
            'otras_act_fisica' => $this->faker->sentence,
            'fecha_ultima_act_fisica' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'usuario_id' => User::factory(),

        ];
    }
}
