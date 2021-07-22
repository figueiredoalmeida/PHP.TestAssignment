<?php
declare(strict_types=1);
namespace Linkfire\Assignment\Controllers\HttpExceptions;

use Linkfire\Assignment\Controllers\AbstractHttpException;

/**
 * Class Http404Exception
 *
 * Returns the exception class for Not Found Error (404)
 *
 * @package App\Lib\Exceptions
 */
class Http404Exception extends AbstractHttpException
{
    protected $httpCode = 404;
    protected $httpMessage = 'Not Found';
}
