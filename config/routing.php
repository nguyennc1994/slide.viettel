<?php

use Phalcon\Mvc\Router\Group as RouterGroup;

$viettel1 = new RouterGroup([
    'module'     => 'viettel1',
    'controller' => 'index',
    'action'     => 'index',
    'namespace'  => 'QQ\Module\Viettel1\Controller',
]);

$viettel1->add('/viettel1/:controller/:action/:params', [
    'controller' => 1,
    'action'     => 2,
    'params'     => 3,
]);

$viettel1->add('/viettel1/:controller', [
    'controller' => 1,
]);

$viettel1->add('/viettel1/backend', [
    'controller' => 'backend',
    'action'    => 'index'
]);


$viettel1->add('/viettel1/backend/slide', [
    'controller' => 'backend',
    'action'    => 'slide'
]);

$viettel1->add('/viettel1/frontend/slide', [
    'controller' => 'frontend',
    'action'    => 'slide'
]);

$viettel1->add('/viettel1/frontend', [
    'controller' => 'frontend',
    'action'    => 'index'
]);

$viettel1->add('/viettel1[/]?', [
    'controller' => 'index',
    'action'    => 'index'
]);

return $viettel1;
