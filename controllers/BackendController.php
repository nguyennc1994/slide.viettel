<?php

namespace QQ\Module\Viettel1\Controller;

use Phalcon\Di\Service;
use QQ\Core\Model\Services\Service\Workflow;


class BackendController extends ControllerBase
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub

    }

    public function indexAction()
    {
    $this->view->setVar('title','Backend');
    }

    public function slideAction()
    {
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/app.js");
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/upload/services/index.js");
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/upload/controllers/popup.js");
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/slide/services/index.js");
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/slide/controllers/index.js");
    }

    public function transparentAction()
    {
        echo "Transparent";
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/app.js");
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/upload/services/index.js");
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/upload/controllers/popup.js");
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/transparent/services/index.js");
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/transparent/controllers/index.js");
    }

    public function transparentScreensAction()
    {
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/app.js");
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/upload/services/index.js");
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/upload/controllers/popup.js");
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/transparent/services/index.js");
        $this->assets->addJs("/modules/viettel1/themes/backend/default/ng-app/transparent/controllers/index.js");
    }
}
