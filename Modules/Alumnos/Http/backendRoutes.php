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
    $router->bind('inscripciones', function ($id) {
        return app('Modules\Alumnos\Repositories\InscripcionesRepository')->find($id);
    });
    $router->get('inscripciones', [
        'as' => 'admin.alumnos.inscripciones.index',
        'uses' => 'InscripcionesController@index',
        'middleware' => 'can:alumnos.inscripciones.index'
    ]);
    $router->get('inscripciones/create', [
        'as' => 'admin.alumnos.inscripciones.create',
        'uses' => 'InscripcionesController@create',
        'middleware' => 'can:alumnos.inscripciones.create'
    ]);
    $router->post('inscripciones', [
        'as' => 'admin.alumnos.inscripciones.store',
        'uses' => 'InscripcionesController@store',
        'middleware' => 'can:alumnos.inscripciones.store'
    ]);
    $router->get('inscripciones/{inscripciones}/edit', [
        'as' => 'admin.alumnos.inscripciones.edit',
        'uses' => 'InscripcionesController@edit',
        'middleware' => 'can:alumnos.inscripciones.edit'
    ]);
    $router->put('inscripciones/{inscripciones}', [
        'as' => 'admin.alumnos.inscripciones.update',
        'uses' => 'InscripcionesController@update',
        'middleware' => 'can:alumnos.inscripciones.update'
    ]);
    $router->delete('inscripciones/{inscripciones}', [
        'as' => 'admin.alumnos.inscripciones.destroy',
        'uses' => 'InscripcionesController@destroy',
        'middleware' => 'can:alumnos.inscripciones.destroy'
    ]);
// append


});
