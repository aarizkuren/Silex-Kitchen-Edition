<?php
/**
 * User: asier
 * Date: 9/01/14
 * Time: 16:13
 */

namespace Tomsaver\Controller;


use Silex\Application;
use Silex\ControllerCollection;
use Symfony\Component\HttpFoundation\Request;
use Tomsaver\Controller;

class SecurityController extends Controller
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
        $controllers->get('/login', function (Application $app, Request $request) {
            return $this->loginTemplate($app, $request);
        })->bind('login');

        $controllers->match(
            '/login',
            function (Application $app, Request $request) {
                if ($request->isMethod('post')) {
                    return $this->loginAction($app, $request);
                }
                return $this->loginTemplate($app, $request);
            }
        )->method('POST|GET')->bind('login');

        return $controllers;
    }

    protected function loginAction(Application $app, Request $request)
    {
        if ($request->isMethod('post')) {
            $jsonResponse = array(
                'logged' => 1,
                'userId' => 1
            );
        } else {
            $jsonResponse = array(
                'logged' => 0,
                'userId' => null
            );
        }
    }

    protected function loginTemplate(Application $app, Request $request)
    {
        return $this->twig()->render('security/login.html.twig');
    }
}