<?php
/**
 * User: asier
 * Date: 7/01/14
 * Time: 17:16
 */

namespace Tomsaver;

use Silex\Application;
use Silex\ControllerProviderInterface;
use Silex\Provider\SecurityServiceProvider;
use Symfony\Component\HttpFoundation\Session\Session;

abstract class Controller implements ControllerProviderInterface
{
    /** @var \Silex\Application */
    protected $app;

    /** @var  \Twig_Environment */
    private $twig;

    /** @var  SecurityServiceProvider */
    private $security;

    /** @var  Session */
    private $session;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @return \Twig_Environment
     */
    protected function twig()
    {
        if (null === $this->twig) {
            $this->twig = $this->app['twig'];
        }
        return $this->twig;
    }

    /**
     * @return SecurityServiceProvider
     */
    protected function security()
    {
        if (null === $this->security) {
            $this->security = $this->app['security'];
        }
        return $this->security;
    }

    /**
     * @return Session
     */
    protected function session()
    {
        if (null === $this->session) {
            $this->session = $this->app['session'];
        }
        return $this->session;
    }

}