<?php
use Phalcon\Di;
use Phalcon\Loader;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Router;
use Phalcon\Http\Request;
use Phalcon\Http\Response;
use Phalcon\Mvc\Dispatcher;

define('APP_PATH', dirname(__DIR__) . '/app');

$loader = new Loader();
$loader->registerDirs(
    [
        APP_PATH . "/controllers/",
    ]
);

// Register namespaces
$loader->registerNamespaces(
    [
        'Linkfire\Assignment' => APP_PATH,
    ]
);

$loader->register();

$di = new Di();
// Registering a router
$di->set("router", Router::class);
// Registering a dispatcher
$di->set(
    'dispatcher',
    function () {
        $dispatcher = new Dispatcher();

        $dispatcher->setDefaultNamespace(
            'Linkfire\Assignment\Controllers'
        );

        return $dispatcher;
    }
);

// Registering a Http\Response
$di->set("response", Response::class);
// Registering a Http\Request
$di->set("request", Request::class);

// Registering the view component
$di->set(
    "view",
    function () {
        $view = new View();
        $view->setViewsDir("../apps/views/");
        return $view;
    }
);

try {
    $application = new Application($di);
    $response = $application->handle();
    $response->send();
} catch (Exception $e) {
    echo $e->getMessage();
}