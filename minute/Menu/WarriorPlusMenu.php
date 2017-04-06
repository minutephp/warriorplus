<?php
/**
 * User: Sanchit <dev@minutephp.com>
 * Date: 7/8/2016
 * Time: 7:57 PM
 */

namespace Minute\Menu {

    use Minute\Event\ImportEvent;

    class WarriorPlusMenu {
        public function adminLinks(ImportEvent $event) {
            $links = [
                'warriorplus' => ['title' => 'WarriorPlus', 'icon' => 'fa-dollar', 'priority' => 3, 'href' => '/admin/warriorplus'],
            ];

            $event->addContent($links);
        }
    }
}