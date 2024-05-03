<?php

$routes = [
    'landing' => 'landingpages.php',
    'index' => 'index.php',
    'create' => 'createform.php',
    'insert' => 'insert.php',
    'update' => 'update.php',
    'delete' => 'delete.php',
];

$route = isset($_GET['route']) ? $_GET['route'] : 'landing';

if (array_key_exists($route, $routes)) {
    include $routes[$route];
} else {
    include '404.php';
}
