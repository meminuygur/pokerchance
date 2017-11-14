<?php

require_once('controller/Controller.php');
require_once __DIR__ . '/vendor/autoload.php';
session_start();

$controller = '';
$action = 'index';

$routes = explode('/', $_SERVER['REQUEST_URI']);

// get controller name
if ( !empty($routes[1]) )
{
    $controller = $routes[1];
}
// get name action
if ( !empty($routes[2]) )
{
    $action = $routes[2];
}

$controllerName = ucfirst($controller).'Controller';
require_once('controller/'.$controllerName.'.php');

$controller = new $controllerName;

$controller->{$action}();

?>