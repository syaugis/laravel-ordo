<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeature;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function store()
    {
        Feature::insert([
            ['name' => 'Seat Heater'],
            ['name' => 'Parking Camera'],
            ['name' => 'Sentry Mode'],
            ['name' => 'Remote Key'],
            ['name' => 'Airbag'],
            ['name' => 'Autopilot'],
            ['name' => 'Blind Spot Detection']
        ]);

        $cars = Car::whereIn('id', range(1, 5))->get();

        $cars->each(function ($car) {
            $randomFeatures = Feature::inRandomOrder()->take(4)->pluck('id');

            $car->features()->attach($randomFeatures);
        });

        return redirect('car')->with('success', 'Features Have Been Inserted Successfully');
    }
}
