<?php
/**
 * User: asier
 * Date: 7/01/14
 * Time: 17:34
 */

namespace Tomsaver\Controller;


use Silex\Application;
use Silex\ControllerCollection;
use Symfony\Component\HttpFoundation\Request;
use Tomsaver\Controller;

class Backend extends Controller
{
    public function connect(Application $app)
    {
        /** @var ControllerCollection $controllers */
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function (Application $app, Request $request) {
            return $this->indexAction($app, $request);
        })->bind('homepage');

        return $controllers;
    }

    protected function indexAction(Application $app, Request $request)
    {
        return $this->twig()->render('index.html.twig');
    }

} 