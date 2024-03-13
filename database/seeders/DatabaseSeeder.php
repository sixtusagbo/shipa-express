<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Shipment;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Mirolic Miralo',
            'email' => 'mail.mirolic@gmail.com',
            'password' => '$2y$12$I6aUcgvZXmPt01CoD3l9TOLG7yKPrH7R2u5SGe075sJshBNx.A9zy' // devPast@24
        ]);

        User::factory()->create([
            'email' => 'mamin@shipa.com',
            'password' => '$2y$12$AKGcoha7Uz41ascNLmZx3eG0gBGp6CehhbbLychq2DHPlXUnJL9.m' // shiMin71
        ]);

        $this->call(IconSeeder::class);

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
