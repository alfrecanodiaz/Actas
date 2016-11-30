<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/alumnos'], function (Router $router) {
    $router->bind('alumnos', function ($id) {
        return app('Modules\Alumnos\Repositories\AlumnosRepository')->find($id);
    });
    $router->get('alumnos', [
        'as' => 'admin.alumnos.alumnos.index',
        'uses' => 'AlumnosController@index',
        'middleware' => 'can:alumnos.alumnos.index'
    ]);
    $router->get('alumnos/create', [
        'as' => 'admin.alumnos.alumnos.create',
        'uses' => 'AlumnosController@create',
        'middleware' => 'can:alumnos.alumnos.create'
    ]);
    $router->post('alumnos', [
        'as' => 'admin.alumnos.alumnos.store',
        'uses' => 'AlumnosController@store',
        'middleware' => 'can:alumnos.alumnos.store'
    ]);
    $router->get('alumnos/{alumnos}/edit', [
        'as' => 'admin.alumnos.alumnos.edit',
        'uses' => 'AlumnosController@edit',
        'middleware' => 'can:alumnos.alumnos.edit'
    ]);
    $router->put('alumnos/{alumnos}', [
        'as' => 'admin.alumnos.alumnos.update',
        'uses' => 'AlumnosController@update',
        'middleware' => 'can:alumnos.alumnos.update'
    ]);
    $router->delete('alumnos/{alumnos}', [
        'as' => 'admin.alumnos.alumnos.destroy',
        'uses' => 'AlumnosController@destroy',
        'middleware' => 'can:alumnos.alumnos.destroy'
    ]);
// append

});
