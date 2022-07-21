<?php
$router->add('posts', ['controller' => \App\Controllers\PostsController::class, 'action' => 'index', 'method' => 'GET']);
$router->add(
    'post/{id:\d+}',
    ['controller' => \App\Controllers\PostsController::class, 'action' => 'show', 'method' => 'GET']
);
// CRUD
$router->add('login', ['controller' => \App\Controllers\AuthController::class, 'action' => 'login', 'method' => 'GET']);
$router->add('register', ['controller' => \App\Controllers\AuthController::class, 'action' => 'register', 'method' => 'GET']);
$router->add('auth/verify', ['controller' => \App\Controllers\AuthController::class, 'action' => 'verify', 'method' => 'POST']);
$router->add('users/create', ['controller' => \App\Controllers\UsersController::class, 'action' => 'store', 'method' => 'POST']);
