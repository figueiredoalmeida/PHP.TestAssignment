<?php
declare(strict_types=1);
namespace Linkfire\Assignment\Controllers\HttpExceptions;

use Linkfire\Assignment\Controllers\AbstractHttpException;

/**
 * Class Http400Exception
 *
 * Returns the exception class for Bad Request Error (400)
 *
 * @package App\Lib\Exceptions
 */
class Http400Exception extends AbstractHttpException
{
    protected $httpCode = 400;
    protected $httpMessage = 'Bad request';
}
