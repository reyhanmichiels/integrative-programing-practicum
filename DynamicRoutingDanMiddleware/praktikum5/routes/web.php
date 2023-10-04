<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Http\Request;

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

$router->get('/user/{id}', function ($id) {
    return 'User Id = ' . $id;
});

$router->get('/post/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'Post ID = ' . $postId . ' Comments ID = ' . $commentId;
});

$router->get('/users[/{userId}]', function ($userId = null) {
    return $userId === null ? 'Data semua users' : 'Data user dengan id ' . $userId;
});

$router->get('/auth/login', ['as' => 'route.auth.login', function () {
    return;
}]);

$router->get('/profile', function (Request $request) {
    if ($request->isLoggedIn) {
        return redirect()->route('route.auth.login');
    }
});

$router->group(['prefix' => 'users'], function () use ($router) {
    $router->get('/', function () { // menjadi /users/, /users => prefix, / => path
        return "GET /users";
    });
});

$router->get('/admin/home/', ['middleware' => 'age', function () {
    return 'Dewasa';
}]);

$router->get('/fail', function () {
    return 'Dibawah umur';
});
