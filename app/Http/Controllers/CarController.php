<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CarController extends Controller
{
    public function index(): View
    {
        $cars = Car::whereYear('date_of_manufacture', '>', 2022)
            ->where('type', 'Pickup Truck')
            ->get();

        return view('car', compact('cars'));
    }

    public function store(): RedirectResponse
    {
        Car::create([
            'name' => 'Mitsubishi Supra',
            'type' => 'MPV',
            'price' => 35000000000,
            'date_of_manufacture' => '2018-01-01',
        ]);

        return redirect('car')->with('success', 'Cars Have Been Inserted Successfully');
    }
}
