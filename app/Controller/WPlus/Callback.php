<?php
/**
 * Created by: MinutePHP framework
 */
namespace App\Controller\WPlus {

    use Minute\Routing\RouteEx;
    use Minute\View\Helper;
    use Minute\View\View;

    class Callback {
        public function index (RouteEx $_route) {
            return (new View());
        }
	}
}