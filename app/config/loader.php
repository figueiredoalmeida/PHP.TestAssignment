<?php

use Phalcon\Loader;

define('APP_PATH', dirname(__DIR__));

$loader = new Loader();

$loader->registerDirs([
    APP_PATH,
]);

$loader->registerNamespaces([
    'Linkfire\Assignment\Controllers' => APP_PATH . '/controllers/',
    'Linkfire\Assignment\Models'      => APP_PATH . "/models/",
    'Linkfire\Assignment\Services'    => APP_PATH . "/services/",
]);

$loader->register();