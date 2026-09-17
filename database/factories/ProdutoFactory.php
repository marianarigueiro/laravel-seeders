<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categoria;

/**
 * @extends Factory<Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'         => fake()->words(3, true),
            'preco'        => fake()->randomFloat(2, 10, 5000),
            'estoque'      => fake()->numberBetween(0, 200),
            'categoria_id' => Categoria::inRandomOrder()->first()?->id ?? Categoria::factory(),
        ];
    }
}
