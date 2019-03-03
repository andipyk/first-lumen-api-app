<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('key', 'ExampleController@generateKey' );

$router->post('foo', 'ExampleController@fooExample');

$router->get('user/{id}', 'ExampleController@getUser');

$router->post('post/cat1/{cat1}/cat2/{cat2}', 'ExampleController@getPost');
$router->get('post/cat1/{cat1}/cat2/{cat2}', 'ExampleController@getPost');

// http://lumen-blog.test/admin/home?age=20
$router->get('admin/home', ['middleware' => 'age', function()
{
  return 'Umurnya cukup';
}]);

$router->get('fail', function()
{
  return 'Umurnya belum om';
});
