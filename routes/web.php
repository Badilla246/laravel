<?php

use App\Http\Controllers\AttendeesController;
use App\Http\Controllers\PerformancesController;
use App\Http\Controllers\VenuesController;
use App\Http\Controllers\BandsController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'home']);

Route::get('/bands', [BandsController::class, 'bands'])->name('bands');
Route::get('/bands/create', [BandsController::class,'create']);
Route::post('/bands/create',[BandsController::class,'store']);
Route::get('/bands/{band}', [BandsController::class,'edit']);
Route::post('/bands/{band}', [BandsController::class,'update']);
Route::delete('/bands/delete/{band}',[BandsController::class,'delete']);


Route::get('/venues', [VenuesController::class, 'venues'])->name('venues');
Route::get('/venues/create', [VenuesController::class,'create']);
Route::post('/venues/create',[VenuesController::class,'store']);

Route::get('/performances', [PerformancesController::class, 'performance'])->name('performances');
Route::get('/performances/{performances}', [PerformancesController::class,'edit']);
Route::post('/performances/{performances}', [PerformancesController::class,'update']);

Route::get('/attendees', [AttendeesController::class, 'Attendee'])->name('attendees');




