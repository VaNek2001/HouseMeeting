<?php
namespace Framework;

Router::addRoute(new Route('user', 'UserController@index', Route::METHOD_GET));
Router::addRoute(new Route('user/{id}', 'UserController@getById', Route::METHOD_GET));
Router::addRoute(new Route('delete/{test_data}', 'TestController1@test_c_1', Route::METHOD_GET));
Router::addRoute(new Route('delete/{test_data}/value_id/{test_value}', 'TestController1@test_c_1', Route::METHOD_GET));
Router::addRoute(new Route('wellcome/{name}', 'TestController2@test_c_2', Route::METHOD_GET));
echo "Маршруты добавлены<br>";