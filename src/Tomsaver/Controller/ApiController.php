<?php
/**
 * User: asier
 * Date: 10/01/14
 * Time: 9:25
 */

namespace Tomsaver\Controller;


use Silex\Application;
use Silex\ControllerCollection;
use Tomsaver\Controller;
use Tomsaver\CustomerTracking\Controller\CustomerTrackingController;

class ApiController extends Controller
{

    /**
     * Returns routes to connect to the given application.
     *
     * @param Application $app An Application instance
     *
     * @return ControllerCollection A ControllerCollection instance
     */
    public function connect(Application $app)
    {
        $controllers = $this->controllers();
        // Cargamos el main controller de cada bundle que queramos
        $app->mount($app['api.endpoint'] . '/' . $app['api.version'] . "/customer-tracking", new CustomerTrackingController($app));
        return $controllers;
    }

} 