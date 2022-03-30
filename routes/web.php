<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoxController;
use App\Http\Controllers\FlightController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{user}', function (User $user) {
    return $user;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('box', BoxController::class);

Route::resource('flights', FlightController::class);
//Route::post('/flights/{flight}', [FlightController::class, 'update'])->name('flights.mojupdate');
Route::get('/sime', [FlightController::class, 'posebna']);

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/polje', function () {
    return [1, 2, 3];
});

Route::get('/probavam', function () {
    return view('components.vijest.index');
});

require __DIR__ . '/auth.php';
