<?php
/**
 * User: asier
 * Date: 10/01/14
 * Time: 10:08
 */

namespace Tomsaver;


use Silex\Application;
use Tomsaver\CustomerTracking\Controller\CustomerTrackingController;
use Tomsaver\Lib\AbstractController;

class RoutesLoader extends AbstractController
{
    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->instantiateControllers();
    }

    private function instantiateControllers()
    {
        $this->app['customerTracking.controller'] = $this->app->share(function () {
            return new CustomerTrackingController($this->app);
        });
    }

    public function bindRoutesToControllers()
    {
        $this->app['customerTracking.controller']->bindRoutesToControllers();
    }
}