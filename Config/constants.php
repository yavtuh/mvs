<?php
define('BASE_DIR', dirname(__DIR__));
define('APP_DIR', dirname(__DIR__) . '/App');
define('VIEW_DIR', APP_DIR . '/Views');
define('SERVER_PORT', (!empty($_SERVER['SERVER_PORT']) ? ':' . $_SERVER['SERVER_PORT'] : '' ));
define('SITE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . SERVER_PORT);
define('ASSETS_URL', SITE_URL . '/assets');
define('IMG_DIR', BASE_DIR . '/public/assets/images');
define('CATEGORIES_IMG_DIR', IMG_DIR . '/categories');
define('POSTS_IMG_DIR', IMG_DIR . '/posts');
define('IMG_URL', ASSETS_URL . '/images');
