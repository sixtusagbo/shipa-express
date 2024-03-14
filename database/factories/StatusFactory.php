<?php

namespace Database\Factories;

use App\Models\Icon;
use App\Models\Shipment;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Status>
 */
class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shipment_id' => 1,
            'stage' => $this->faker->randomElement(config('meta.status.stages')),
            'location' => $this->faker->optional()->city,
            'remarks' => $this->faker->sentence,
            'icon_id' => $this->faker->boolean(50) ? Icon::inRandomOrder()->first()->id : null,
            'created_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
