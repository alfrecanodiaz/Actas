<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/profesores'], function (Router $router) {
    $router->bind('profesores', function ($id) {
        return app('Modules\Profesores\Repositories\ProfesoresRepository')->find($id);
    });
    $router->get('profesores', [
        'as' => 'admin.profesores.profesores.index',
        'uses' => 'ProfesoresController@index',
        'middleware' => 'can:profesores.profesores.index'
    ]);
    $router->get('profesores/create', [
        'as' => 'admin.profesores.profesores.create',
        'uses' => 'ProfesoresController@create',
        'middleware' => 'can:profesores.profesores.create'
    ]);
    $router->post('profesores', [
        'as' => 'admin.profesores.profesores.store',
        'uses' => 'ProfesoresController@store',
        'middleware' => 'can:profesores.profesores.store'
    ]);
    $router->get('profesores/{profesores}/edit', [
        'as' => 'admin.profesores.profesores.edit',
        'uses' => 'ProfesoresController@edit',
        'middleware' => 'can:profesores.profesores.edit'
    ]);
    $router->put('profesores/{profesores}', [
        'as' => 'admin.profesores.profesores.update',
        'uses' => 'ProfesoresController@update',
        'middleware' => 'can:profesores.profesores.update'
    ]);
    $router->delete('profesores/{profesores}', [
        'as' => 'admin.profesores.profesores.destroy',
        'uses' => 'ProfesoresController@destroy',
        'middleware' => 'can:profesores.profesores.destroy'
    ]);
// append

});
