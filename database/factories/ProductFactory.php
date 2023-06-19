<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Provider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provider>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'desc' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 0, 99999),
            'cant' => $this->faker->numberBetween(1, 1000),
            'prov_id' => function(){ return Provider::factory()->create()->id; },
        ];
    }
}
