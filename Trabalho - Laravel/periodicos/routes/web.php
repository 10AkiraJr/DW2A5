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

use App\Http\Controllers\PeriodicController;

Route::get('/', [PeriodicController::class, 'index']);
Route::get('/periodics/create', [PeriodicController::class, 'create'])->middleware('auth');
Route::post('/periodics', [PeriodicController::class, 'store']);
Route::delete('/periodics/{id}', [PeriodicController::class, 'destroy'])->middleware('auth');
Route::get('/periodics/edit/{id}', [PeriodicController::class, 'edit'])->middleware('auth');
Route::put('/periodics/update/{id}', [PeriodicController::class, 'update'])->middleware('auth');

Route::get('/dashboard', [PeriodicController::class, 'dashboard'])->middleware('auth');

Route::get('/periodics/join/{id}', [PeriodicController::class, 'joinPublicacoes'])->middleware('auth');

Route::delete('/periodics/leave/{id}', [PeriodicController::class, 'leavePublicacoes'])->middleware('auth');

/*Route::get('/{id}', [PeriodicController::class, 'showPublicacoes']);*/