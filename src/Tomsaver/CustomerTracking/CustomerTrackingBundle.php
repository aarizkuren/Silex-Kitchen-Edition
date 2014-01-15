<?php
/**
 * User: asier
 * Date: 15/01/14
 * Time: 13:37
 */

namespace Tomsaver\CustomerTracking;


use Tomsaver\CustomerTracking\Controller\RegisteredUserController;
use Tomsaver\CustomerTracking\Service\RegisteredUserService;
use Tomsaver\Lib\AbstractBundle;

class CustomerTrackingBundle extends AbstractBundle
{

    public function instantiateControllers()
    {
        $this->bindServicesIntoContainer();
        $this->app['registered-users.controller'] = $this->app->share(function () {
            return new RegisteredUserController(
                $this->app,
                $this->app['registered-users.services'],
                "customer-tracking"
            );
        });
    }

    public function bindRoutesToControllers()
    {
        $api = $this->controllers();

        $this->app['registered-users.controller']->bindRoutesToControllers($api);

        // Adding customerTracking registeredUser api
        //$this->createUrls("registered-users", "registeredUsers");

        $this->app->mount($this->apiPath(), $api);
    }

    public function bindServicesIntoContainer()
    {
        $this->app['registered-users.services'] = $this->app->share(function () {
            return new RegisteredUserService();
        });
    }
}