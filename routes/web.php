<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/key', function()
{
  return str_random(32);
});

// http://lumen-blog.test/admin/home?age=20
$router->get('admin/home', ['middleware' => 'age', function()
{
  return 'Umurnya cukup';
}]);

$router->get('fail', function()
{
  return 'Umurnya belum om';
});
