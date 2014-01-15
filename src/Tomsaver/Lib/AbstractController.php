<?php
/**
 * User: asier
 * Date: 15/01/14
 * Time: 12:40
 */

namespace Tomsaver\Lib;


use Silex\Application;
use Silex\ControllerCollection;

abstract class AbstractController extends AppHelper
{
    protected $baseRouting;
    protected $service;

    public function __construct(Application $app, Service $service, $baseRouting)
    {
        parent::__construct($app);

        $this->baseRouting = "/" . $baseRouting;
        $this->service = $service;
    }

    public abstract function bindRoutesToControllers(ControllerCollection $collection);

    /**
     * Helper to build simple CRUD for $baseUrl on $controller
     *
     * @param \Silex\ControllerCollection $collection
     * @param $baseUrl
     * @param $controller
     */
    protected function createUrls(ControllerCollection $collection, $baseUrl, $controller)
    {
        $path = $this->baseRouting . "/" . $baseUrl;
        $collection->get($path, "$controller.controller:getAll");
        $collection->post($path, "$controller.controller:save");
        $collection->post($path . "/{id}", "$controller.controller:update");
        $collection->delete($path . "/{id}", "$controller.controller:delete");
    }
}