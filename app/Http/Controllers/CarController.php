<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CarController extends Controller
{
    public function index(): View
    {
        $cars = DB::table('cars')
            ->whereYear('date_of_manufacture', '<=', 2022)
            ->where('price', '>', 30000000000)
            ->get();

        return view('car', compact('cars'));
    }

    public function store(): RedirectResponse
    {
        DB::table('cars')->insert([
            ['name' => 'Tesla CyberTruck', 'type' => 'Pickup Truck', 'price' => 2500000000, 'date_of_manufacture' => '2024-01-01'],
            ['name' => 'Honda Civic RS', 'type' => 'Sedan', 'price' => 61680000000, 'date_of_manufacture' => '2022-06-01'],
            ['name' => 'Hyundai i20', 'type' => 'Hatchback', 'price' => 36004000000, 'date_of_manufacture' => '2022-04-04'],
            ['name' => 'Wrangler Rubicon', 'type' => 'SUV', 'price' => 1730000000, 'date_of_manufacture' => '2024-02-01'],
            ['name' => 'Toyota Kijang Innova 2.0 G AT', 'type' => 'MPV', 'price' => 30000000000, 'date_of_manufacture' => '2020-06-05'],
        ]);

        return redirect('car')->with('success', 'Cars Have Been Inserted Successfully');
    }
}
