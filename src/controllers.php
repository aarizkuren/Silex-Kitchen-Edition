<?php
/** Angular JS Routes */

// Modulo para la home
$app->mount('/', new Tomsaver\Controller\Backend($app));

// Modulo para los templates
$app->mount('/template', new Tomsaver\Controller\TemplateController($app));

// Modulo para el login/logout
$app->mount('/security', new \Tomsaver\Controller\SecurityController($app));

$app->mount('/api', new Tomsaver\Controller\ApiController($app));

$app->error(function (\Exception $e, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    switch ($code) {
        case 404:
            $message = 'The requested page could not be found.';
            break;
        default:
            $message = 'We are sorry, but something went terribly wrong.';
    }

    return new \Symfony\Component\HttpFoundation\Response($message, $code);
});

return $app;
