<?php

$router->add('', ['controller' => \App\Controllers\HomeController::class, 'action' => 'index', 'method' => 'GET']);
$router->add('login', ['controller' => \App\Controllers\AuthController::class, 'action' => 'login', 'method' => 'GET']);
$router->add('logout', ['controller' => \App\Controllers\AuthController::class, 'action' => 'logout', 'method' => 'GET']);
$router->add('register', ['controller' => \App\Controllers\AuthController::class, 'action' => 'register', 'method' => 'GET']);
$router->add('auth/verify', ['controller' => \App\Controllers\AuthController::class, 'action' => 'verify', 'method' => 'POST']);
$router->add('users/create', ['controller' => \App\Controllers\UsersController::class, 'action' => 'store', 'method' => 'POST']);

/**
 * CRUD
 */

$router->add('home/showCategories',['controller' => \App\Controllers\HomeController::class, 'action' => 'showCategories', 'method' => 'GET']);
$router->add('home/{id:\d+}/showSingleCategories',['controller' => \App\Controllers\HomeController::class, 'action' => 'showSingleCategories', 'method' => 'GET']);
$router->add('home/showPost',['controller' => \App\Controllers\HomeController::class, 'action' => 'showPost', 'method' => 'GET']);
$router->add('home/{id:\d+}/showSinglePost',['controller' => \App\Controllers\HomeController::class, 'action' => 'showSinglePost', 'method' => 'GET']);



$router->add('admin/posts', ['controller' => \App\Controllers\Admin\PostsController::class, 'action' => 'index', 'method' => 'GET']);
$router->add('admin/posts/create', ['controller' => \App\Controllers\Admin\PostsController::class, 'action' => 'create', 'method' => 'GET']);
$router->add('admin/posts/store', ['controller' => \App\Controllers\Admin\PostsController::class, 'action' => 'store', 'method' => 'POST']);
$router->add('admin/posts/{id:\d+}', ['controller' => \App\Controllers\Admin\PostsController::class, 'action' => 'show', 'method' => 'GET']);
$router->add('admin/posts/{id:\d+}/edit', ['controller' => \App\Controllers\Admin\PostsController::class, 'action' => 'edit', 'method' => 'GET']);
$router->add('admin/posts/{id:\d+}/update', ['controller' => \App\Controllers\Admin\PostsController::class, 'action' => 'update', 'method' => 'POST']);
$router->add('admin/posts/{id:\d+}/destroy', ['controller' => \App\Controllers\Admin\PostsController::class, 'action' => 'destroy', 'method' => 'POST']);
$router->add('admin/dashboard', ['controller' => \App\Controllers\Admin\DashboardController::class, 'action' => 'index', 'method' => 'GET']);


$router->add('admin/categories', ['controller' => \App\Controllers\Admin\CategoriesController::class, 'action' => 'index', 'method' => 'GET']);
$router->add('admin/categories/create', ['controller' => \App\Controllers\Admin\CategoriesController::class, 'action' => 'create', 'method' => 'GET']);
$router->add('admin/categories/store', ['controller' => \App\Controllers\Admin\CategoriesController::class, 'action' => 'store', 'method' => 'POST']);
$router->add('admin/categories/{id:\d+}', ['controller' => \App\Controllers\Admin\CategoriesController::class, 'action' => 'show', 'method' => 'GET']);
$router->add('admin/categories/{id:\d+}/edit', ['controller' => \App\Controllers\Admin\CategoriesController::class, 'action' => 'edit', 'method' => 'GET']);
$router->add('admin/categories/{id:\d+}/update', ['controller' => \App\Controllers\Admin\CategoriesController::class, 'action' => 'update', 'method' => 'POST']);
$router->add('admin/categories/{id:\d+}/destroy', ['controller' => \App\Controllers\Admin\CategoriesController::class, 'action' => 'destroy', 'method' => 'POST']);

