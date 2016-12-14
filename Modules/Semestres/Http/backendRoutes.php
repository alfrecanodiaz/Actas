<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/semestres'], function (Router $router) {
    $router->bind('semestres', function ($id) {
        return app('Modules\Semestres\Repositories\SemestresRepository')->find($id);
    });
    $router->get('semestres', [
        'as' => 'admin.semestres.semestres.index',
        'uses' => 'SemestresController@index',
        'middleware' => 'can:semestres.semestres.index'
    ]);
    $router->get('semestres/create', [
        'as' => 'admin.semestres.semestres.create',
        'uses' => 'SemestresController@create',
        'middleware' => 'can:semestres.semestres.create'
    ]);
    $router->post('semestres', [
        'as' => 'admin.semestres.semestres.store',
        'uses' => 'SemestresController@store',
        'middleware' => 'can:semestres.semestres.store'
    ]);
    $router->get('semestres/{semestres}/edit', [
        'as' => 'admin.semestres.semestres.edit',
        'uses' => 'SemestresController@edit',
        'middleware' => 'can:semestres.semestres.edit'
    ]);
    $router->put('semestres/{semestres}', [
        'as' => 'admin.semestres.semestres.update',
        'uses' => 'SemestresController@update',
        'middleware' => 'can:semestres.semestres.update'
    ]);
    $router->delete('semestres/{semestres}', [
        'as' => 'admin.semestres.semestres.destroy',
        'uses' => 'SemestresController@destroy',
        'middleware' => 'can:semestres.semestres.destroy'
    ]);
    $router->bind('convocatorias', function ($id) {
        return app('Modules\Semestres\Repositories\ConvocatoriasRepository')->find($id);
    });
    $router->get('convocatorias', [
        'as' => 'admin.semestres.convocatorias.index',
        'uses' => 'ConvocatoriasController@index',
        'middleware' => 'can:semestres.convocatorias.index'
    ]);
    $router->get('convocatorias/create', [
        'as' => 'admin.semestres.convocatorias.create',
        'uses' => 'ConvocatoriasController@create',
        'middleware' => 'can:semestres.convocatorias.create'
    ]);
    $router->post('convocatorias', [
        'as' => 'admin.semestres.convocatorias.store',
        'uses' => 'ConvocatoriasController@store',
        'middleware' => 'can:semestres.convocatorias.store'
    ]);
    $router->get('convocatorias/{convocatorias}/edit', [
        'as' => 'admin.semestres.convocatorias.edit',
        'uses' => 'ConvocatoriasController@edit',
        'middleware' => 'can:semestres.convocatorias.edit'
    ]);
    $router->put('convocatorias/{convocatorias}', [
        'as' => 'admin.semestres.convocatorias.update',
        'uses' => 'ConvocatoriasController@update',
        'middleware' => 'can:semestres.convocatorias.update'
    ]);
    $router->delete('convocatorias/{convocatorias}', [
        'as' => 'admin.semestres.convocatorias.destroy',
        'uses' => 'ConvocatoriasController@destroy',
        'middleware' => 'can:semestres.convocatorias.destroy'
    ]);
// append


});
