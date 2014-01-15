<?php
/**
 * User: asier
 * Date: 15/01/14
 * Time: 13:37
 */

namespace Tomsaver\Lib;


use Silex\Application;

abstract class AbstractBundle extends AppHelper
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->instantiateControllers();
    }

    public abstract function instantiateControllers();

    public abstract function bindRoutesToControllers();

    public abstract function bindServicesIntoContainer();

} 