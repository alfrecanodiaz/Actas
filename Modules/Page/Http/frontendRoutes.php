<?php

use Illuminate\Routing\Router;

/** @var Router $router */
if (! App::runningInConsole()) {
    $router->get('/', [
        'uses' => 'PublicController@homepage',
        'as' => 'homepage',
        'middleware' => config('asgard.page.config.middleware'),
    ]);

    $router->get('cursos', [
        'uses' => 'PublicController@cursos'
    ]);

    $router->get('materias', [
        'uses' => 'PublicController@materias'
    ]);

    $router->get('profesores', [
        'uses' => 'PublicController@profesores'
    ]);

    $router->get('formCalificacion', [
        'uses' => 'PublicController@formCalificacion'
    ]);

    $router->any('{uri}', [
        'uses' => 'PublicController@uri',
        'as' => 'page',
        'middleware' => config('asgard.page.config.middleware'),
    ])->where('uri', '.*');

}
