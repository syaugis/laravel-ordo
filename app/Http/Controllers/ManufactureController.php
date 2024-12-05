<?php

namespace App\Http\Controllers;

use App\Models\Manufacture;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ManufactureController extends Controller
{
    public function index(): View
    {
        $manufactures = Manufacture::where('address', 'Japan')
            ->get();

        return view('manufacture', compact('manufactures'));
    }

    public function store(): RedirectResponse
    {
        Manufacture::insert([
            [
                'name' => 'Tesla',
                'address' => 'America',
                'car_id' => 1
            ],
            [
                'name' => 'Honda',
                'address' => 'Japan',
                'car_id' => 2
            ],
            [
                'name' => 'Hyundai',
                'address' => 'Japan',
                'car_id' => 3
            ],
        ]);

        return redirect('manufacture')->with('success', 'Manufactures Have Been Inserted Successfully');
    }
}
