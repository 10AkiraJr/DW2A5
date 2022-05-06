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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pagina1', function () {
    $nome = "Roberto";
    $email = 'roberto.akirajuh1@gmail.com';
    return view('pagina1', ['nome' => $nome, 'email' => $email]);
});
