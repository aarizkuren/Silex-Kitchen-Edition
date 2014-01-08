<?php

$app->mount('/', new Tomsaver\Controller\Backend($app));

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
