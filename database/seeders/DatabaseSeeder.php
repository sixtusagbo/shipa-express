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

        if (app()->environment() !== 'production') {
            $this->call(DevelopmentSeeder::class);
        } else {
            $this->call(ProductionSeeder::class);
        }
    }
}
