<?php
declare(strict_types=1);
namespace Linkfire\Assignment\Controllers;

use Phalcon\Http\Request;
use Phalcon\Http\Response;
use Phalcon\Db\Adapter\Pdo\Postgresql;
use Phalcon\Config;
use Linkfire\Assignment\Services\GenresService;
use Linkfire\Assignment\Models\Genres;
use Phalcon\DI\Injectable;

/**
 * Class AbstractController
 *
 * @property Request $request
 * @property Response $htmlResponse
 * @property Postgresql $db
 * @property Config $config
 * @property GenresService  $genresService
 * @property Genres $genre
 */
abstract class AbstractController extends Injectable
{
    /**
     * Route not found. HTTP
     * - 404 Error
     */
    const ERROR_NOT_FOUND = 1;

    /**
     * Invalid Request
     * - HTTP 400 Error.
     */
    const ERROR_INVALID_REQUEST = 2;
}
