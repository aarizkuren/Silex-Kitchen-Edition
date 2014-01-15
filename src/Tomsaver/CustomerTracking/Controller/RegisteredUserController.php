<?php
/**
 * User: asier
 * Date: 15/01/14
 * Time: 13:49
 */

namespace Tomsaver\CustomerTracking\Controller;


use Silex\ControllerCollection;
use Symfony\Component\HttpFoundation\JsonResponse;
use Tomsaver\Lib\AbstractController;

class RegisteredUserController extends AbstractController
{

    public function bindRoutesToControllers(ControllerCollection $collection)
    {
        $this->createUrls($collection, "registered-users", "registered-users");
    }

    public function getAll()
    {
        return new JsonResponse($this->service->getAll());
    }
}