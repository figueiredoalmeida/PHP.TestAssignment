<?php

use Phalcon\Mvc\Router;

$router = new Router();

$router->add(
    '/api/list',
    [
        'controller' => 'genres',
        'action'     => 'getGenreList',
    ]
);

$router->add(
    '/api/id/{id:[1-9][0-9]*}',
    [
        'controller' => 'genres',
        'action'     => 'getGenreById',
    ]
);

$router->handle();

return $router;