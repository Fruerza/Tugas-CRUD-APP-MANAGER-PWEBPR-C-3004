<?php
session_start();
require_once 'koneksi.php';

$routes = [
    'landing' => 'landingpages.php',
    'index' => 'index.php',
    'create' => 'createform.php',
    'insert' => 'insert.php',
    'update' => 'update.php',
    'delete' => 'delete.php',
];

$route = isset($_GET['route'])? $_GET['route'] : 'landing';

if (array_key_exists($route, $routes)) {
    if (isset($_GET['error'])) {
        $error_message = $_GET['error'];
    }
    include $routes[$route];
} else {
    include '404.php';
}