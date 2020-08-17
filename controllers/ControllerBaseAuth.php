<?php

namespace QQ\Module\Viettel1\Controller;

//use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;

use QQ\Core\Controller\Controller;
use QQ\Core\Model\Services\DataCollector\User as UserDataCollector;
use QQ\Module\Viettel1\Controller\ControllerBase;

class ControllerBaseAuth extends ControllerBase
{

    public function initialize()
    {
        parent::initialize();

        $this->view->setVar('main_title', ['vi'=>'Phần mềm tạo lập sách 3D']);

    }
    public function beforeExecuteRoute(Dispatcher $dispatcher)
    {
        $modules = $this->auth->getUserModules();

//        if (!$this->auth->isAuthorizedVisitor()) {
        if (!$this->auth->isAdmin() && ($modules == null || !in_array('viettel1', $modules))) {
            $this->flashSession->notice(t('You do not have permission to access this page'));
            $this->cookies->set('HTTPBACK', serialize($this->router->getRewriteUri()));
            $dispatcher->setReturnedValue($this->response->redirect('/oauth/login', true));
            return false;
        }
    }



}
