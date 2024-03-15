<?php

namespace Database\Seeders;

use App\Models\Icon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $iconNames = [
            'fa-solid fa-check',
            'fa-solid fa-user',
            'fa-solid fa-box',
            'fa-solid fa-box-check',
            'fa-sharp fa-solid fa-cubes-stacked',
            'fa-sharp fa-solid fa-truck-fast',
            'fa-sharp fa-solid fa-xmark',
            'fa-sharp fa-solid fa-car',
            'fa-solid fa-gears',
            'fa-sharp fa-solid fa-truck',
            'fa-solid fa-box-circle-check',
            'fa-solid fa-magnifying-glass',
            'fa-sharp fa-regular fa-magnifying-glass',
            'fa-solid fa-chart-simple',
            'fa-solid fa-anchor',
            'fa-sharp fa-solid fa-anchor',
            'fa-sharp fa-solid fa-truck-front',
            'fa-sharp fa-solid fa-train',
            'fa-sharp fa-solid fa-road',
            'fa-sharp fa-regular fa-road',
            'fa-sharp fa-solid fa-warehouse',
            'fa-solid fa-warehouse',
            'fa-solid fa-warehouse-full',
            'fa-solid fa-truck-field',
            'fa-solid fa-truck-clock',
            'fa-sharp fa-solid fa-train-subway',
            'fa-solid fa-train-subway-tunnel',
            'fa-solid fa-sailboat',
            'fa-solid fa-road-circle-exclamation',
            'fa-solid fa-road-circle-check',
            'fa-solid fa-hand-holding-box',
            'fa-solid fa-gas-pump',
            'fa-solid fa-ferry',
        ];

        foreach ($iconNames as $name) {
            Icon::create(['name' => $name]);
        }
    }
}
