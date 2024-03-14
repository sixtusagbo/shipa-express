<?php

namespace Database\Factories;

use App\Models\Shipment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shipment>
 */
class ShipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tracking_number' => Shipment::generateTrackingNumber(),
            'shipper_name' => $this->faker->name,
            'shipper_address' => $this->faker->address,
            'shipper_phone' => $this->faker->optional()->phoneNumber,
            'origin' => $this->faker->city,
            'recipient_name' => $this->faker->name,
            'recipient_email' => $this->faker->email,
            'recipient_address' => $this->faker->address,
            'recipient_phone' => $this->faker->optional()->phoneNumber,
            'destination' => $this->faker->city,
            'type' => $this->faker->randomElement(['Parcel', 'Documents', 'Sentiments']),
            'weight' => $this->faker->randomFloat(2, 1, 100) . ' kg',
            'mode' => $this->faker->randomElement(['Air', 'Road', 'Sea', 'Train']),
            'customs_cost' => $this->faker->randomFloat(2, 0, 1000),
            'carrier' => $this->faker->optional()->company,
            'pod' => $this->faker->optional()->imageUrl(),
            'invoice_number' => $this->faker->numerify('INV-########'),
            'eta' => $this->faker->optional()->dateTime,
            'booked_on' => $this->faker->date('Y-m-d'),
            'shipped_on' => $this->faker->optional()->date('Y-m-d'),
            'delivered_on' => $this->faker->optional()->date('Y-m-d'),
            'booked_at' => $this->faker->time('H:i:s'),
            'shipped_at' => $this->faker->optional()->time('H:i:s'),
            'delivered_at' => $this->faker->optional()->time('H:i:s'),
        ];
    }
}
