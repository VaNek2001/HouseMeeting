<?php
namespace Framework;

use Framework\Route;
use Framework\Router;

Router::addRoute(new Route('owners', 'OwnerController@index', Route::METHOD_GET));
Router::addRoute(new Route('logout', 'AuthController@logout', Route::METHOD_GET));
Router::addRoute(new Route('login', 'AuthController@login', Route::METHOD_POST));
Router::addRoute(new Route('page/{page}', 'PageController@index', Route::METHOD_GET));
Router::addRoute(new Route('user', 'UserController@index', Route::METHOD_GET, true));
Router::addRoute(new Route('user/{id}', 'UserController@getById', Route::METHOD_GET, true));
Router::addRoute(new Route('', 'PageController@index', Route::METHOD_GET));


Router::addRoute(new Route('delete/{test_data}', 'TestController1@test_c_1', Route::METHOD_GET));
Router::addRoute(new Route('delete/{test_data}/value_id/{test_value}', 'TestController1@test_c_1', Route::METHOD_GET));
Router::addRoute(new Route('wellcome/{name}', 'TestController2@test_c_2', Route::METHOD_GET));
//echo "Маршруты добавлены<br>";