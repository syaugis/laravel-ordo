<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\MultipleController;
use App\Http\Controllers\ReviewController;
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

Route::controller(CarController::class)->prefix('car')->group(function () {
    Route::get('', 'index')->name('car');
    Route::get('insert', 'store')->name('insert.car');
});

Route::get('insert/review', [ReviewController::class, 'store'])->name('insert.review');
Route::get('insert/feature', [FeatureController::class, 'store'])->name('insert.feature');

Route::controller(ManufactureController::class)->prefix('manufacture')->group(function () {
    Route::get('', 'index')->name('manufacture');
    Route::get('insert', 'store')->name('insert.manufacture');
});
