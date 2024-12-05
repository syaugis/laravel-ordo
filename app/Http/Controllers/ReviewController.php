<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(): RedirectResponse
    {
        Review::insert([
            [
                'name' => 'John Doe',
                'text' => 'Amazing car! Highly recommend.',
                'rating' => 9,
                'car_id' => 1,
            ],
            [
                'name' => 'Jane Smith',
                'text' => 'Comfortable and reliable for daily use.',
                'rating' => 8,
                'car_id' => 1,
            ],
            [
                'name' => 'Alex Johnson',
                'text' => 'Good value for the price.',
                'rating' => 7,
                'car_id' => 2,
            ],
            [
                'name' => 'Emily Davis',
                'text' => 'Stylish and modern design.',
                'rating' => 8,
                'car_id' => 2,
            ],
            [
                'name' => 'Michael Brown',
                'text' => 'Powerful performance, perfect for road trips.',
                'rating' => 10,
                'car_id' => 3,
            ],
            [
                'name' => 'Sarah Wilson',
                'text' => 'A bit overpriced, but still a great car.',
                'rating' => 6,
                'car_id' => 3,
            ],
            [
                'name' => 'David Taylor',
                'text' => 'Fuel efficient and spacious.',
                'rating' => 9,
                'car_id' => 4,
            ],
            [
                'name' => 'Sophia Martinez',
                'text' => 'Smooth driving experience.',
                'rating' => 8,
                'car_id' => 4,
            ],
            [
                'name' => 'Daniel Anderson',
                'text' => 'Could use better tech features.',
                'rating' => 7,
                'car_id' => 5,
            ],
            [
                'name' => 'Isabella Thomas',
                'text' => 'Great for city driving.',
                'rating' => 9,
                'car_id' => 5,
            ],
        ]);

        return redirect('car')->with('success', 'Review Have Been Inserted Successfully');
    }
}
