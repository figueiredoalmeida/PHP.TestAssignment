<?php
declare(strict_types=1);
namespace Linkfire\Assignment\Controllers\HttpExceptions;

use Linkfire\Assignment\Controllers\AbstractHttpException;

/**
 * Class Http422Exception
 *
 * Returns the exception class for Unprocessable entity Error (422)
 *
 * @package App\Lib\Exceptions
 */
class Http422Exception extends AbstractHttpException
{
    protected $httpCode = 422;
    protected $httpMessage = 'Unprocessable entity';
}
