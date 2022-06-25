<?php

use Illuminate\Support\Facades\Route;

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

// php artisan make:request AtorRequest

// php artisan make:migration RemoveNacionalidadeToAtores

// php artisan make:migration AddNacionalidadeIdToAtores

// php artisan optimize: caso criar as rotas e não funcionar

// php artisan migrate

Route::get('/', function () {
    return view('welcomeCustom');
});

Route::get('/home', function () {
    return view('welcomeCustom');
});

Route::group(['prefix' => 'clientes', 'where' => ['id' => '[0-9]+']], function () {
    Route::any('', ['as' => 'clientes', 'uses' => '\App\Http\Controllers\ClientesController@index']);
    Route::get('create', ['as' => 'clientes.create', 'uses' => '\App\Http\Controllers\ClientesController@create']);
    Route::get('{id}/destroy', ['as' => 'clientes.destroy', 'uses' => '\App\Http\Controllers\ClientesController@destroy']);
    Route::get('{id}/edit', ['as' => 'clientes.edit', 'uses' => '\App\Http\Controllers\ClientesController@edit']);
    Route::put('{id}/update', ['as' => 'clientes.update', 'uses' => '\App\Http\Controllers\ClientesController@update']);
    Route::post('store', ['as' => 'clientes.store', 'uses' => '\App\Http\Controllers\ClientesController@store']);
});

Route::group(['prefix' => 'veiculos', 'where' => ['id' => '[0-9]+']], function () {
    Route::get('', ['as' => 'veiculos', 'uses' => '\App\Http\Controllers\VeiculosController@index']);
    Route::get('create', ['as' => 'veiculos.create', 'uses' => '\App\Http\Controllers\VeiculosController@create']);
    Route::get('{id}/destroy', ['as' => 'veiculos.destroy', 'uses' => '\App\Http\Controllers\VeiculosController@destroy']);
    Route::get('{id}/edit', ['as' => 'veiculos.edit', 'uses' => '\App\Http\Controllers\VeiculosController@edit']);
    Route::put('{id}/update', ['as' => 'veiculos.update', 'uses' => '\App\Http\Controllers\VeiculosController@update']);
    Route::post('store', ['as' => 'veiculos.store', 'uses' => '\App\Http\Controllers\VeiculosController@store']);
});

Route::group(['prefix' => 'pecas', 'where' => ['id' => '[0-9]+']], function () {
    Route::get('', ['as' => 'pecas', 'uses' => '\App\Http\Controllers\PecasController@index']);
    Route::get('create', ['as' => 'pecas.create', 'uses' => '\App\Http\Controllers\PecasController@create']);
    Route::get('{id}/destroy', ['as' => 'pecas.destroy', 'uses' => '\App\Http\Controllers\PecasController@destroy']);
    Route::get('{id}/edit', ['as' => 'pecas.edit', 'uses' => '\App\Http\Controllers\PecasController@edit']);
    Route::put('{id}/update', ['as' => 'pecas.update', 'uses' => '\App\Http\Controllers\PecasController@update']);
    Route::post('store', ['as' => 'pecas.store', 'uses' => '\App\Http\Controllers\PecasController@store']);
});

Route::group(['prefix' => 'funcionarios', 'where' => ['id' => '[0-9]+']], function () {
    Route::get('', ['as' => 'funcionarios', 'uses' => '\App\Http\Controllers\FuncionariosController@index']);
    Route::get('create', ['as' => 'funcionarios.create', 'uses' => '\App\Http\Controllers\FuncionariosController@create']);
    Route::get('{id}/destroy', ['as' => 'funcionarios.destroy', 'uses' => '\App\Http\Controllers\FuncionariosController@destroy']);
    Route::get('{id}/edit', ['as' => 'funcionarios.edit', 'uses' => '\App\Http\Controllers\FuncionariosController@edit']);
    Route::put('{id}/update', ['as' => 'funcionarios.update', 'uses' => '\App\Http\Controllers\FuncionariosController@update']);
    Route::post('store', ['as' => 'funcionarios.store', 'uses' => '\App\Http\Controllers\FuncionariosController@store']);
});

Route::group(['prefix' => 'servicos', 'where' => ['id' => '[0-9]+']], function () {
    Route::get('', ['as' => 'servicos', 'uses' => '\App\Http\Controllers\ServicosController@index']);
    Route::get('create', ['as' => 'servicos.create', 'uses' => '\App\Http\Controllers\ServicosController@create']);
    Route::get('{id}/destroy', ['as' => 'servicos.destroy', 'uses' => '\App\Http\Controllers\ServicosController@destroy']);
    Route::get('{id}/edit', ['as' => 'servicos.edit', 'uses' => '\App\Http\Controllers\ServicosController@edit']);
    Route::put('{id}/update', ['as' => 'servicos.update', 'uses' => '\App\Http\Controllers\ServicosController@update']);
    Route::post('store', ['as' => 'servicos.store', 'uses' => '\App\Http\Controllers\ServicosController@store']);
});

Route::group(['prefix' => 'orcamentos', 'where' => ['id' => '[0-9]+']], function () {
    Route::get('', ['as' => 'orcamentos', 'uses' => '\App\Http\Controllers\OrcamentosController@index']);
    Route::get('create', ['as' => 'orcamentos.create', 'uses' => '\App\Http\Controllers\OrcamentosController@create']);
    Route::get('{id}/destroy', ['as' => 'orcamentos.destroy', 'uses' => '\App\Http\Controllers\OrcamentosController@destroy']);
    Route::get('{id}/edit', ['as' => 'orcamentos.edit', 'uses' => '\App\Http\Controllers\OrcamentosController@edit']);
    Route::put('{id}/update', ['as' => 'orcamentos.update', 'uses' => '\App\Http\Controllers\OrcamentosController@update']);
    Route::post('store', ['as' => 'orcamentos.store', 'uses' => '\App\Http\Controllers\OrcamentosController@store']);
});


// Route::get('/clientes', [\App\Http\Controllers\ClientesController::class, 'index']);
// Route::get('/clientes/create', [\App\Http\Controllers\ClientesController::class, 'create']);
// Route::post('/clientes/store', [\App\Http\Controllers\ClientesController::class, 'store']);
// Route::get('/clientes/{id}/destroy', [\App\Http\Controllers\ClientesController::class, 'destroy']);
// Route::get('/clientes/{id}/edit', [\App\Http\Controllers\ClientesController::class, 'edit']);
// Route::put('/clientes/{id}/update', [\App\Http\Controllers\ClientesController::class, 'update']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');