<?php

namespace Database\Factories;
use App\Models\Produto;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\lote>
 */
class loteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    $productId = Produto::pluck('id')->random();

    $validade = $this->faker->date('d-m-Y');
    $validade = \DateTime::createFromFormat('d-m-Y', $validade)->format('Y-m-d');

    return [
        'produto_id' => $productId,
        'validade' => $validade,
        'codebar' => $this->faker->numberBetween($min = 1000, $max = 9000),
        'valor' => $this->faker->randomElement([10, 20, 30])
    ];
}

}
