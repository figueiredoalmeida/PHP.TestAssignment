<?php
use Linkfire\Assignment\Controllers\AbstractHttpException;
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\Application;

try {
    // Config
    $config = require(__DIR__ . '/../app/config/config.php');

    // Autoloading the classes
    require __DIR__ . '/../app/config/loader.php';

    // Initializing DI container
    /**
     * @var FactoryDefault $di
     */
    $di = require __DIR__ . '/../app/config/di.php';

    // Initializing the application
    $application = new Application($di);

    // Setting up the DI container
    $application->setDI($di);

    echo $application->handle(
        $_GET['_url'] ?? '/'
    )->getContent();

} catch (AbstractHttpException $e) {
    $response = $application->response;
    $response->setStatusCode($e->getCode(), $e->getMessage());
    $response->setJsonContent($e->getAppError());
    $response->send();
} catch (\Phalcon\Http\Request\Exception $e) {
    $application->response->setStatusCode(400, 'Bad request')
        ->setJsonContent([
            AbstractHttpException::KEY_CODE    => 400,
            AbstractHttpException::KEY_MESSAGE => 'Bad request'
        ])
        ->send();
} catch (\Exception $e) {
    $result = [
        AbstractHttpException::KEY_CODE    => 500,
        AbstractHttpException::KEY_MESSAGE => 'Some error occurred on the server.'
    ];

    $application->response->setStatusCode(500, 'Internal Server Error')
        ->setJsonContent($result)
        ->send();
}