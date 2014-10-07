<?php

namespace FlexPress\Components\Controller;

use Symfony\Component\Yaml\Exception\RuntimeException;

abstract class AbstractController
{

    /**
     * @var \Pimple
     */
    protected $dic;

    public function __construct($dic)
    {
        if (!isset($dic) || !is_a($dic, 'Pimple')) {

            $message = "You did not provide a valid DIC, please provided a DIC in the form of a Pimple based class.";
            throw new RuntimeException($message);

        }

        $this->dic = $dic;
    }

    /**
     * Default action for the controller
     *
     * @param $request
     * @return mixed
     * @author Tim Perry
     */
    abstract public function indexAction($request);
}
