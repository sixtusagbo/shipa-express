<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Shipment;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('devPast@24'),
            'type' => 'admin',
        ]);

        User::factory()->create([
            'email' => 'mamin@shipa.com',
            'password' => Hash::make('shiMin71'),
            'type' => 'admin',
        ]);

        User::factory()->create([
            'email' => 'demfoo@shipa.com',
            'type' => 'demo',
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
