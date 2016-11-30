<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/materias'], function (Router $router) {
    $router->bind('materias', function ($id) {
        return app('Modules\Materias\Repositories\MateriasRepository')->find($id);
    });
    $router->get('materias', [
        'as' => 'admin.materias.materias.index',
        'uses' => 'MateriasController@index',
        'middleware' => 'can:materias.materias.index'
    ]);
    $router->get('materias/create', [
        'as' => 'admin.materias.materias.create',
        'uses' => 'MateriasController@create',
        'middleware' => 'can:materias.materias.create'
    ]);
    $router->post('materias', [
        'as' => 'admin.materias.materias.store',
        'uses' => 'MateriasController@store',
        'middleware' => 'can:materias.materias.store'
    ]);
    $router->get('materias/{materias}/edit', [
        'as' => 'admin.materias.materias.edit',
        'uses' => 'MateriasController@edit',
        'middleware' => 'can:materias.materias.edit'
    ]);
    $router->put('materias/{materias}', [
        'as' => 'admin.materias.materias.update',
        'uses' => 'MateriasController@update',
        'middleware' => 'can:materias.materias.update'
    ]);
    $router->delete('materias/{materias}', [
        'as' => 'admin.materias.materias.destroy',
        'uses' => 'MateriasController@destroy',
        'middleware' => 'can:materias.materias.destroy'
    ]);
// append

});
