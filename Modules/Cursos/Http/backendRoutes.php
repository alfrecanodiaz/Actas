<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/cursos'], function (Router $router) {
    $router->bind('cursos', function ($id) {
        return app('Modules\Cursos\Repositories\CursosRepository')->find($id);
    });
    $router->get('cursos', [
        'as' => 'admin.cursos.cursos.index',
        'uses' => 'CursosController@index',
        'middleware' => 'can:cursos.cursos.index'
    ]);
    $router->get('cursos/create', [
        'as' => 'admin.cursos.cursos.create',
        'uses' => 'CursosController@create',
        'middleware' => 'can:cursos.cursos.create'
    ]);
    $router->post('cursos', [
        'as' => 'admin.cursos.cursos.store',
        'uses' => 'CursosController@store',
        'middleware' => 'can:cursos.cursos.store'
    ]);
    $router->get('cursos/{cursos}/edit', [
        'as' => 'admin.cursos.cursos.edit',
        'uses' => 'CursosController@edit',
        'middleware' => 'can:cursos.cursos.edit'
    ]);
    $router->put('cursos/{cursos}', [
        'as' => 'admin.cursos.cursos.update',
        'uses' => 'CursosController@update',
        'middleware' => 'can:cursos.cursos.update'
    ]);
    $router->delete('cursos/{cursos}', [
        'as' => 'admin.cursos.cursos.destroy',
        'uses' => 'CursosController@destroy',
        'middleware' => 'can:cursos.cursos.destroy'
    ]);
// append

});
