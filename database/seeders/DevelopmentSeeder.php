<?php

namespace Database\Seeders;

use App\Models\Shipment;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shipment1 = Shipment::factory()->create();
        $shipment2 = Shipment::factory()->create();
        $shipment3 = Shipment::factory()->create();
        $shipment4 = Shipment::factory()->create();

        Status::factory(5)->create([
            'shipment_id' => $shipment1->id,
        ]);
        // Create a 'Delivered' status
        Status::factory()->create([
            'shipment_id' => $shipment1->id,
            'stage' => 'Delivered',
        ]);

        Status::factory(3)->create([
            'shipment_id' => $shipment2->id,
        ]);
        // Create a 'Cancelled' status
        Status::factory()->create([
            'shipment_id' => $shipment2->id,
            'stage' => 'Cancelled',
        ]);

        Status::factory(4)->create([
            'shipment_id' => $shipment3->id,
        ]);
        // Create a 'Returned' status
        Status::factory()->create([
            'shipment_id' => $shipment3->id,
            'stage' => 'Delivered',
        ]);
        Status::factory()->create([
            'shipment_id' => $shipment3->id,
            'stage' => 'Returned',
        ]);

        Status::factory(6)->create([
            'shipment_id' => $shipment4->id,
        ]);
    }
}
