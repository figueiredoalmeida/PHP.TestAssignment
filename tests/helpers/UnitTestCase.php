<?php

namespace Test\Linkfire\Redirector\Helpers;

use Phalcon\Di;
use Phalcon\Test\UnitTestCase as PhalconTestCase;

abstract class UnitTestCase extends PhalconTestCase
{
    use \phpmock\phpunit\PHPMock;

    public function setUp()
    {
        try {
            parent::setUp();
            // Load any additional services that might be required during testing
            $di = Di::getDefault();

            // Get any DI components here. If you have a config, be sure to pass it to the parent

            $this->setDi($di);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
