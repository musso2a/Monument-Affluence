<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[\App\Http\Controllers\IndexController::class, 'index'])->name
('index');

Route::get('/reservation',[\App\Http\Controllers\ReservationController::class, 'reservation'])->name
('reservation');

Route::post('/reservation',[\App\Http\Controllers\ReservationController::class, 'reservation'])->name
('reservation');

Route::get('/reservation/annulation/',[\App\Http\Controllers\AnnulationController::class, 'annulation'])->name
('reservation/annulation');
