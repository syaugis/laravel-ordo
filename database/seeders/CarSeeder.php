<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 3) as $index) {
            DB::table('cars')->insert([
                'name' => $faker->company . ' ' . $faker->word,
                'type' => $faker->randomElement(['Sedan', 'SUV', 'MPV', 'Hatchback', 'Pickup Truck']),
                'price' => $faker->numberBetween(100000000, 1000000000),
                'date_of_manufacture' => $faker->date(),
            ]);
        }

        DB::table('cars')->insert([
            [
                'name' => 'Tesla CyberTruck',
                'type' => 'Pickup Truck',
                'price' => 2500000000,
                'date_of_manufacture' => Carbon::create(2024, 1, 1),
            ],
            [
                'name' => 'Honda Civic RS',
                'type' => 'Sedan',
                'price' => 61680000000,
                'date_of_manufacture' => Carbon::create(2022, 6, 1),
            ],
            [
                'name' => 'Hyundai i20',
                'type' => 'Hatchback',
                'price' => 36004000000,
                'date_of_manufacture' => Carbon::create(2022, 4, 4),
            ],
            [
                'name' => 'Wrangler Rubicon',
                'type' => 'SUV',
                'price' => 1730000000,
                'date_of_manufacture' => Carbon::create(2024, 2, 1),
            ],
            [
                'name' => 'Toyota Kijang Innova 2.0 G AT',
                'type' => 'MPV',
                'price' => 30000000000,
                'date_of_manufacture' => Carbon::create(2020, 6, 5),
            ],
        ]);
    }
}
