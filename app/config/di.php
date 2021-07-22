<?php

use Phalcon\DI\FactoryDefault;
use Phalcon\Http\Response;
use Phalcon\Http\Request;
use Phalcon\Mvc\Dispatcher;

$di = new FactoryDefault();

// Registering a router
$di->set(
    'router',
    function () {
        return include  __DIR__ . '/../config/router.php';
    }
);

// HTTP Response/Request
$di->setShared('response', Response::class);
$di->set("request", Request::class);

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

// Registering the view component
$di->set(
    "view",
    function () {
        $view = new Phalcon\Mvc\View();
        $view->setViewsDir("../apps/views/");
        return $view;
    }
);

// Config settings
$di->setShared('config', $config);

// Database
$di->set(
    'db',
    function () use ($config) {
        return new Phalcon\Db\Adapter\Pdo\Mysql(
            [
                'host'     => $config->database->host,
                'username' => $config->database->username,
                'password' => $config->database->password,
                'dbname'   => $config->database->dbname,
            ]
        );
    }
);

// Register the Genres service
$di->setShared('genresService', '\Linkfire\Assignment\Services\GenresService');

return $di;