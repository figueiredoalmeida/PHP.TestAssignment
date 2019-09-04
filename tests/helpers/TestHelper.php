<?php
use Phalcon\Loader;

ini_set("display_errors", 1);
error_reporting(E_ALL);

define("ROOT_PATH", __DIR__ . '/..');

// Define some absolute path constants to aid in locating resources
define('BASE_PATH', ROOT_PATH . '/../..');
define('APP_PATH', BASE_PATH . '/app');

set_include_path(
    ROOT_PATH . PATH_SEPARATOR . get_include_path()
);
// Use the application autoloader to autoload the classes
// Autoload the dependencies found in composer
$loader = new Loader();

$loader->registerDirs(
    [
        ROOT_PATH,
    ]
);

$loader->registerNamespaces(
    [
        "Linkfire\Asssignment" => APP_PATH,
    ]
);

// Add required files on load
$loader->registerFiles(
    [
        BASE_PATH . '/vendor/autoload.php',
    ]
);

$loader->register();
