<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => '/'], function() use($router){
    $router->get('doLogin', 'UsuariosController@doLogin');
    // $router->post('registrant', 'RegistrantController@create');
    // $router->get('registrant/{id}', 'RegistrantController@show');
    // $router->put('registrant/{id}', 'RegistrantController@update');
    // $router->delete('registrant/{id}', 'RegistrantController@destroy');

    //CLIENTES
    $router->get('getAllClientes', 'ClientesController@getAllClientes');
  });