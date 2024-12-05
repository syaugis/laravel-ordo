<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MultipleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello world';
});

Route::get('/perkalian/{number?}', [MultipleController::class, 'index']);

Route::get('/tambah', function (Request $request) {
    $validatedData = $request->validate([
        'angka1' => ['required', 'numeric'],
        'angka2' => ['required', 'numeric'],
    ]);

    $angka1 = $request->query('angka1');
    $angka2 = $request->query('angka2');

    $result = $angka1 + $angka2;

    return view('addition', compact('angka1', 'angka2', 'result'));
});

Route::get('/car', [CarController::class, 'index'])->name('car');
Route::get('/car/insert', [CarController::class, 'store'])->name('car.insert');
