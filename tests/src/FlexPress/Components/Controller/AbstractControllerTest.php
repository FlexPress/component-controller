<?php

use FlexPress\Components\Controller\AbstractController;

class ConcreateController extends AbstractController
{
    public function indexAction($request)
    {
    }
}

class AbstractControllerTest extends PHPUnit_Framework_TestCase
{

    public function testConstructor()
    {

        $this->setExpectedException("RuntimeException", "You did not provide a valid DIC, please provided a DIC in the form of a Pimple based class.");

        $invalidInput = new stdClass();
        new ConcreateController($invalidInput);

    }
}
