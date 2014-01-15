<?php
/**
 * User: asier
 * Date: 15/01/14
 * Time: 12:09
 */

namespace Tomsaver\CustomerTracking\Controller;

use Silex\Application;
use Silex\ControllerCollection;
use Symfony\Component\HttpFoundation\Request;
use Tomsaver\Controller;

class CustomerTrackingController extends Controller
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
        $controllers->get('/hello/{name}', function (Application $app, Request $request) {
            $result = array('name' => $request->get('name'));
            return $app->json($result);
        });
        return $controllers;
    }


} 