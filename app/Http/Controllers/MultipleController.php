<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultipleController extends Controller
{
    public function index($number = null): int
    {
        return $number * 2;
    }
}
