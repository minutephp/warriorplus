<?php

/** @var Router $router */
use Minute\Model\Permission;
use Minute\Routing\Router;

$router->get('/warriorplus/delivery', 'WPlus/Delivery', false)->setDefault('_noView', true);

$router->get('/warriorplus/ipn', 'WPlus/IPN', false)->setDefault('_noView', true);
$router->get('/warriorplus/callback', 'WPlus/Callback', false)->setDefault('_noView', true);

