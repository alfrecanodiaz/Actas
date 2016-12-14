<?php

use Illuminate\Routing\Router;

/** @var Router $router */
if (! App::runningInConsole()) {
    
    $router->get('homepage/{keylogin}', [
        'uses' => 'PublicController@homepage',
        'as' => 'homepage',
        'middleware' => config('asgard.page.config.middleware'),
    ]);
    
    $router->get('materias', [
        'uses' => 'PublicController@materias',
        'as' => 'materias',
    ]);
    
    $router->get('query', [
        'uses' => 'PublicController@query',
        'as' => 'query',
    ]);
    
    $router->get('profesores', [
        'uses' => 'PublicController@profesores',
        'as' => 'profesores',
    ]);
    
    $router->get('formCalificacion', [
        'uses' => 'PublicController@formCalificacion',
        'as' => 'formCalificacion',
    ]);
    
    // as no debe ser igual a login o genera error en el backend
    $router->get('/', [
        'uses' => 'PublicController@showLogin',
        'as' => 'getLogin',
    ]); 
    
    $router->post('doLogin', [
        'uses' => 'PublicController@doLogin',
        'as' => 'doLogin'
    ]); 
    
    $router->any('{uri}', [
        'uses' => 'PublicController@uri',
        'as' => 'page',
        'middleware' => config('asgard.page.config.middleware'),
    ])->where('uri', '.*');
}
