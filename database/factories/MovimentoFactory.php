<?php

namespace Database\Factories;

use App\Models\lote;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movimento>
 */
class MovimentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $loteId = lote::pluck('id')->random();

    $data = $this->faker->date('d-m-Y');
    $data = \DateTime::createFromFormat('d-m-Y', $data)->format('Y-m-d');

    return [
        'lote_id' => $loteId,
        'data' => $data,
        'codebar' => $this->faker->numberBetween($min = 1000, $max = 9000),
        'valor' => $this->faker->randomElement([10, 20, 30])
    ];
    }
}
