<?php
/**
 * User: asier
 * Date: 10/01/14
 * Time: 10:08
 */

namespace Tomsaver;


use Silex\Application;
use Silex\ControllerCollection;

class RoutesLoader
{
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->instantiateControllers();
    }

    private function instantiateControllers()
    {
        $this->app['article.controller'] = $this->app->share(function () {
            return new ArticleController($this->app['article.service']);
        });
    }

    public function bindRoutesToControllers()
    {
        $app = $this->app;
        /** @var ControllerCollection $api */
        $api = $app["controllers_factory"];

        // Adding article api
        $this->createUrls("articles", "article");

        $app->mount($app['api.endpoint'] . '/' . $app['api.version'], $api);
    }

    private function createUrls($baseUrl, $controller)
    {
        /** @var ControllerCollection $api */
        $api = $this->app["controllers_factory"];

        $api->get("/$baseUrl", "$controller.controller:getAll"); // List
        $api->post("/$baseUrl", "$controller.controller:save"); // create
        $api->post("/$baseUrl/{id}", "$controller.controller:update"); // update
        $api->delete("/$baseUrl/{id}", "$controller.controller:delete"); // delete
    }
}