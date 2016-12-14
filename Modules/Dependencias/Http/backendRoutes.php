<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/dependencias'], function (Router $router) {
    $router->bind('departamentos', function ($id) {
        return app('Modules\Dependencias\Repositories\DepartamentosRepository')->find($id);
    });
    $router->get('departamentos', [
        'as' => 'admin.dependencias.departamentos.index',
        'uses' => 'DepartamentosController@index',
        'middleware' => 'can:dependencias.departamentos.index'
    ]);
    $router->get('departamentos/create', [
        'as' => 'admin.dependencias.departamentos.create',
        'uses' => 'DepartamentosController@create',
        'middleware' => 'can:dependencias.departamentos.create'
    ]);
    $router->post('departamentos', [
        'as' => 'admin.dependencias.departamentos.store',
        'uses' => 'DepartamentosController@store',
        'middleware' => 'can:dependencias.departamentos.store'
    ]);
    $router->get('departamentos/{departamentos}/edit', [
        'as' => 'admin.dependencias.departamentos.edit',
        'uses' => 'DepartamentosController@edit',
        'middleware' => 'can:dependencias.departamentos.edit'
    ]);
    $router->put('departamentos/{departamentos}', [
        'as' => 'admin.dependencias.departamentos.update',
        'uses' => 'DepartamentosController@update',
        'middleware' => 'can:dependencias.departamentos.update'
    ]);
    $router->delete('departamentos/{departamentos}', [
        'as' => 'admin.dependencias.departamentos.destroy',
        'uses' => 'DepartamentosController@destroy',
        'middleware' => 'can:dependencias.departamentos.destroy'
    ]);
    $router->bind('secciones', function ($id) {
        return app('Modules\Dependencias\Repositories\SeccionesRepository')->find($id);
    });
    $router->get('secciones', [
        'as' => 'admin.dependencias.secciones.index',
        'uses' => 'SeccionesController@index',
        'middleware' => 'can:dependencias.secciones.index'
    ]);
    $router->get('secciones/create', [
        'as' => 'admin.dependencias.secciones.create',
        'uses' => 'SeccionesController@create',
        'middleware' => 'can:dependencias.secciones.create'
    ]);
    $router->post('secciones', [
        'as' => 'admin.dependencias.secciones.store',
        'uses' => 'SeccionesController@store',
        'middleware' => 'can:dependencias.secciones.store'
    ]);
    $router->get('secciones/{secciones}/edit', [
        'as' => 'admin.dependencias.secciones.edit',
        'uses' => 'SeccionesController@edit',
        'middleware' => 'can:dependencias.secciones.edit'
    ]);
    $router->put('secciones/{secciones}', [
        'as' => 'admin.dependencias.secciones.update',
        'uses' => 'SeccionesController@update',
        'middleware' => 'can:dependencias.secciones.update'
    ]);
    $router->delete('secciones/{secciones}', [
        'as' => 'admin.dependencias.secciones.destroy',
        'uses' => 'SeccionesController@destroy',
        'middleware' => 'can:dependencias.secciones.destroy'
    ]);
    $router->bind('turnos', function ($id) {
        return app('Modules\Dependencias\Repositories\TurnosRepository')->find($id);
    });
    $router->get('turnos', [
        'as' => 'admin.dependencias.turnos.index',
        'uses' => 'TurnosController@index',
        'middleware' => 'can:dependencias.turnos.index'
    ]);
    $router->get('turnos/create', [
        'as' => 'admin.dependencias.turnos.create',
        'uses' => 'TurnosController@create',
        'middleware' => 'can:dependencias.turnos.create'
    ]);
    $router->post('turnos', [
        'as' => 'admin.dependencias.turnos.store',
        'uses' => 'TurnosController@store',
        'middleware' => 'can:dependencias.turnos.store'
    ]);
    $router->get('turnos/{turnos}/edit', [
        'as' => 'admin.dependencias.turnos.edit',
        'uses' => 'TurnosController@edit',
        'middleware' => 'can:dependencias.turnos.edit'
    ]);
    $router->put('turnos/{turnos}', [
        'as' => 'admin.dependencias.turnos.update',
        'uses' => 'TurnosController@update',
        'middleware' => 'can:dependencias.turnos.update'
    ]);
    $router->delete('turnos/{turnos}', [
        'as' => 'admin.dependencias.turnos.destroy',
        'uses' => 'TurnosController@destroy',
        'middleware' => 'can:dependencias.turnos.destroy'
    ]);
    $router->bind('aulas', function ($id) {
        return app('Modules\Dependencias\Repositories\AulasRepository')->find($id);
    });
    $router->get('aulas', [
        'as' => 'admin.dependencias.aulas.index',
        'uses' => 'AulasController@index',
        'middleware' => 'can:dependencias.aulas.index'
    ]);
    $router->get('aulas/create', [
        'as' => 'admin.dependencias.aulas.create',
        'uses' => 'AulasController@create',
        'middleware' => 'can:dependencias.aulas.create'
    ]);
    $router->post('aulas', [
        'as' => 'admin.dependencias.aulas.store',
        'uses' => 'AulasController@store',
        'middleware' => 'can:dependencias.aulas.store'
    ]);
    $router->get('aulas/{aulas}/edit', [
        'as' => 'admin.dependencias.aulas.edit',
        'uses' => 'AulasController@edit',
        'middleware' => 'can:dependencias.aulas.edit'
    ]);
    $router->put('aulas/{aulas}', [
        'as' => 'admin.dependencias.aulas.update',
        'uses' => 'AulasController@update',
        'middleware' => 'can:dependencias.aulas.update'
    ]);
    $router->delete('aulas/{aulas}', [
        'as' => 'admin.dependencias.aulas.destroy',
        'uses' => 'AulasController@destroy',
        'middleware' => 'can:dependencias.aulas.destroy'
    ]);
// append




});
