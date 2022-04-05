<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VizsgaidopontFactory>
 */
class VizsgaidopontFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'targy' => $this->faker->name(),
            'tipus' => $this->faker->randomElement(['erettsegi', 'szakmai']),
            'kezdes' => $this->faker->dateTimeBetween('2015-03-23', '2022-04-05'),
        ];
    }
}
