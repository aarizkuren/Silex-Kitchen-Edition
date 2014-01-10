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

class TemplateController extends Controller
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

        $controllers->get('/index', function () {
            return $this->twig()->render('backend/index.html.twig');
        });

        $controllers->get('/login', function () {
            return $this->twig()->render('security/login.html.twig');
        });

        return $controllers;
    }

} 