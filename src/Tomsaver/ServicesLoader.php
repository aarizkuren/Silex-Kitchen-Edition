<?php
/**
 * User: asier
 * Date: 10/01/14
 * Time: 10:08
 */

namespace Tomsaver;

use Silex\Application;

class ServicesLoader
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function bindServicesIntoContainer()
    {
        $app = $this->app;
    }
}