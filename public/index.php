<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

$router->add('news/{id:\d+}', ['controller' => 'NewsController', 'action' => 'index']);
$router->add('news/item/{id:\d+}', ['controller' => 'ShowController', 'action' => 'index']);
$router->add('news/view', ['controller' => 'AddController', 'action' => 'index']);
$router->add('news/add', ['controller' => 'DbController', 'action' => 'index']);
$router->add('news/edit/{id:\d+}', ['controller' => 'IndexController', 'action' => 'index']);
$router->add('news/update/{id:\d+}', ['controller' => 'EditController', 'action' => 'index']);
$router->add('news/delete/{id:\d+}', ['controller' => 'DeleteController', 'action' => 'index']);

$router->dispatch($_SERVER['QUERY_STRING']);
