<?php
declare(strict_types=1);
namespace Linkfire\Assignment\Services;

/**
 * Class AbstractService
 * @package App\Services
 */
abstract class AbstractService extends \Phalcon\DI\Injectable
{
    // Genre not found
    const ERROR_GENRE_NOT_FOUND = 11002;

}
