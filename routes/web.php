<?php

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

/**
 * Routes for resource goods-controller
 */
$router->get('goods', 'GoodsController@all');
$router->get('goods/paged', 'GoodsController@allPaged');
$router->get('goods/find', 'GoodsController@findGoods');
$router->get('goods/{id}', 'GoodsController@get');
$router->post('goods', 'GoodsController@add');
$router->put('goods/{id}', 'GoodsController@put');
$router->delete('goods/{id}', 'GoodsController@remove');


Route::post('users', 'RegisterController@register');