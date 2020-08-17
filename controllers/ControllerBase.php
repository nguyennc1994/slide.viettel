<?php

namespace QQ\Module\Viettel1\Controller;

//use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;

use QQ\Core\Controller\Controller;
use QQ\Core\Model\Services\DataCollector\User as UserDataCollector;

class ControllerBase extends Controller
{
    public function initialize()
    {
        $this->view->setLayout('default');
    }

    public function beforeExecuteRoute(Dispatcher $dispatcher)
    {


    }
}
