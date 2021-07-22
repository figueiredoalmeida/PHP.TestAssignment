<?php
declare(strict_types=1);
namespace Linkfire\Assignment\Controllers\HttpExceptions;

use Linkfire\Assignment\Controllers\AbstractHttpException;

/**
 * Class Http500Exception
 *
 * Returns the exception class for Internal Server Error (500)
 *
 * @package App\Lib\Exceptions
 */
class Http500Exception extends AbstractHttpException
{
    protected $httpCode = 500;
    protected $httpMessage = 'Internal Server Error';
}
