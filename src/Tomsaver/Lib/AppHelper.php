<?php
/**
 * User: asier
 * Date: 15/01/14
 * Time: 13:41
 */

namespace Tomsaver\Lib;

use Silex\Application;


abstract class AppHelper
{
    /** @var \Silex\Application */
    protected $app;

    /** @var  ControllerCollection */
    private $controllers;

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
     * returns api path
     * @return string
     */
    protected function apiPath()
    {
        $app = $this->app;
        return "{$app['api.endpoint']}/{$this->apiVersion()}";
    }

    protected function apiVersion()
    {
        return $this->app['api.version'];
    }

    /**
     * @return ControllerCollection
     */
    protected function controllers()
    {
        if (null === $this->controllers) {
            $this->controllers = $this->app['controllers_factory'];
        }
        return $this->controllers;
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