<?php

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
    $angka1 = $request->query('angka1', 0);
    $angka2 = $request->query('angka2', 0);

    return $angka1 + $angka2;
});
