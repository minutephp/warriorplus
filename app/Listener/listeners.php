<?php

/** @var Binding $binding */
use Minute\Event\AdminEvent;
use Minute\Event\Binding;
use Minute\Menu\WarriorPlusMenu;

$binding->addMultiple([
    //support
    ['event' => AdminEvent::IMPORT_ADMIN_MENU_LINKS, 'handler' => [WarriorPlusMenu::class, 'adminLinks']],
]);