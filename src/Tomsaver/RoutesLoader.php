<?php
/**
 * User: asier
 * Date: 10/01/14
 * Time: 10:08
 */

namespace Tomsaver;


use Silex\Application;
use Tomsaver\CustomerTracking\CustomerTrackingBundle;
use Tomsaver\Lib\AppHelper;

class RoutesLoader extends AppHelper
{
    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->instantiateBundles();
    }

    private function instantiateBundles()
    {
        $this->app['customerTracking.bundle'] = $this->app->share(function () {
            return new CustomerTrackingBundle($this->app);
        });
    }

    public function bindRoutesToControllers()
    {
        /** CustomerTrackingBundle */
        $this->app['customerTracking.bundle']->bindRoutesToControllers($this->controllers());
    }
}