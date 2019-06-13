<?php
session_start();

ini_set('display_errors', true);
error_reporting(E_ALL);

$routes = array(
    'login' => array(
        'controller' => 'Auth',
        'action' => 'login'
    ),
    'register' => array(
        'controller' => 'Auth',
        'action' => 'register'
    ),
    'home' => array(
        'controller' => 'Home',
        'action' => 'index'
    ),
    'store' => array(
        'controller' => 'Store',
        'action' => 'index'
    ),
    'history' => array(
        'controller' => 'User',
        'action' => 'history'
    ),
    'calendar' => array(
        'controller' => 'Home',
        'action' => 'calendar'
    ),
    'contact' => array(
        'controller' => 'Home',
        'action' => 'contact'
    )
);

if (empty($_GET['page'])) {
  $_GET['page'] = 'home';
}

if (empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

if(!empty($_POST['action'])){
  if($_POST["action"] == "logout") {
    $_SESSION = array();
    header('location: index.php');
    exit();
  }
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
