<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cliente>
 */
class ClienteFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome_cliente' => $this->faker->name('pt_PT'),
            'email' => $this->faker->unique()->safeEmail(),
            'nif' => $this->faker->unique()->numberBetween(100000000, 999999999),
            'morada' => $this->faker->address('pt_PT'),
            'telemovel' => $this->faker->unique()->numberBetween(900000000, 999999999),
        ];
    }
}
