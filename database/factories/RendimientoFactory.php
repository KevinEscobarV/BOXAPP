<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rendimiento>
 */
class RendimientoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'peso' => $this->faker->randomFloat(2, 50, 200),
            'bmi' => $this->faker->randomFloat(2, 10, 50),
            'grasa' => $this->faker->randomFloat(2, 10, 50),
            'musculo' => $this->faker->randomFloat(2, 10, 50),
            'agua' => $this->faker->randomFloat(2, 10, 50),
            'grasa_visceral' => $this->faker->randomFloat(2, 10, 50),
            'huesos' => $this->faker->randomFloat(2, 10, 50),
            'metabolismo' => $this->faker->randomFloat(2, 10, 50),
            'proteina' => $this->faker->randomFloat(2, 10, 50),
            'obesidad' => $this->faker->randomFloat(2, 10, 50),
            'lbm' => $this->faker->randomFloat(2, 10, 50),
            'abdomen_medio' => $this->faker->randomFloat(2, 10, 50),
            'abdomen_bajo' => $this->faker->randomFloat(2, 10, 50),
            'brazo_derecho' => $this->faker->randomFloat(2, 10, 50),
            'brazo_izquierdo' => $this->faker->randomFloat(2, 10, 50),
            'pierna_derecha' => $this->faker->randomFloat(2, 10, 50),
            'pierna_izquierda' => $this->faker->randomFloat(2, 10, 50),
        ];
    }
}
