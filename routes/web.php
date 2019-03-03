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


$router->get('/key', function()
{
  return str_random(32);
});


$router->get('/user/{id}', function($id)
{
  return 'User id = '.$id;
});

$router->get('/post/{postID}/comments/{commentID}', function($postID, $commentID)
{
  return 'Post Id = '.$postID.' -- Comment Id = '.$commentID;
});


// ################### Menambahkan [ ] untuk opsional ###################
$router->get('/params[/{paramId}]', function($paramId = null)
{
  return 'Params = '.$paramId;
});

// ################### Menambahkan aliases + redirect ###################
$router->get('profile', function()
{
    return redirect()->route('route.profile');
});

$router->get('profile/tes', ['as' => 'route.profile', function() {
  return route('route.profile');
}]);
