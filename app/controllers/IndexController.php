<?php
declare(strict_types=1);
namespace Linkfire\Assignment\Controllers;

/**
 * Class IndexController
 * @package App\Controllers
 */
class IndexController extends \Phalcon\Mvc\Controller
{
    public function indexAction()
    {
        echo "<h1>Linkfire - Music Genres API</h1>";
    }

}