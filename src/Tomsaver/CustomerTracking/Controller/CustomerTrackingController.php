<?php
/**
 * User: asier
 * Date: 15/01/14
 * Time: 12:09
 */

namespace Tomsaver\CustomerTracking\Controller;

use Silex\Application;
use Silex\ControllerCollection;
use Tomsaver\Lib\AbstractController;

class CustomerTrackingController extends AbstractController
{
    public function bindRoutesToControllers()
    {
        $app = $this->app;

        /** @var ControllerCollection $api */
        $api = $this->controllers();

        // Adding customerTracking registeredUser api
        $this->createUrls("registered-users", "registeredUsers");

        $app->mount($this->apiPath() . "/customer-tracking", $api);
    }
}