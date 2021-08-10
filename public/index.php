<?php

require_once __DIR__ . "/../vendor/autoload.php";

use app\controllers\MainController;
use app\models;

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
  'GET',
  '/',
  [
      'controller' => 'MainController',
      'method' => 'home'
  ],
  'home'
);

$router->map(
  'GET',
  '/createurs',
  [
      'controller' => 'CreatorController',
      'method' => 'creator'
  ],
  'createurs'
);

$routeInfo = $router->match();


if($routeInfo === false) 
{ 
      http_response_code( 404 );
        echo "Y a une merde qui traine... SORRY ! ";
        // exit();

 } else {      
$destination = $routeInfo['target'];
$controllerName = "app\\controllers\\" . $destination['controller'];
$methodName = $destination['method'];
$controller = new $controllerName();

$controller->$methodName();

var_dump($methodName);
};

