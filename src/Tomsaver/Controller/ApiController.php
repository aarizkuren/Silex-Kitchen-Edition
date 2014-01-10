<?php
/**
 * User: asier
 * Date: 10/01/14
 * Time: 9:25
 */

namespace Tomsaver\Controller;


use Silex\Application;
use Silex\ControllerCollection;
use Symfony\Component\HttpFoundation\Request;
use Tomsaver\Controller;

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

        $controllers->post('/hello/{name}', function (Application $app, Request $request) {
            $result = array('name' => $request->get('name'));
            return $app->json($result);
        });

        return $controllers;
    }

} 