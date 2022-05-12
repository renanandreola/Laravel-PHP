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

// php artisan serve
// php artisan make:controller AtoresController
// php artisan make:model Ator -m
// php artisan tinker
// composer require laravel/ui
// php artisan ui vue --auth
// composer require jeroennoten/laravel-adminlte
// php artisan adminlte:install
// php artisan make:model Nacionalidade -m
// php artisan make:controller NacionalidadesController

Route::get('/', function () {
    return view('welcome');
});

Route::get('clientes', function () {
    return  'Página de clientes';
});

Route::get('/clientes', [\App\Http\Controllers\ClientesController::class, 'index']);
Route::get('/clientes/create', [\App\Http\Controllers\ClientesController::class, 'create']);
Route::post('/clientes/store', [\App\Http\Controllers\ClientesController::class, 'store']);