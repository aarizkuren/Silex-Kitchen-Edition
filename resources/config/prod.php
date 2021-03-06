<?php

// Local
$app['locale'] = 'es';
$app['session.default_locale'] = $app['locale'];
$app['translator.messages'] = array(
    'fr' => __DIR__ . '/../resources/locales/fr.yml',
    'es' => __DIR__ . '/../resources/locales/es.yml'
);

// Api version
$app['api.version'] = 'v1';
$app['api.endpoint'] = '/api';

// Cache
$app['cache.path'] = __DIR__ . '/../cache';

// Http cache
$app['http_cache.cache_dir'] = $app['cache.path'] . '/http';

// Twig cache
$app['twig.options.cache'] = $app['cache.path'] . '/twig';

// Assetic
$app['assetic.enabled'] = true;
$app['assetic.path_to_cache'] = $app['cache.path'] . '/assetic';
$app['assetic.path_to_web'] = __DIR__ . '/../../web/assets';
$app['assetic.input.path_to_assets'] = __DIR__ . '/../assets';

$app['assetic.input.path_to_css'] = $app['assetic.input.path_to_assets'] . '/less/style.less';
$app['assetic.output.path_to_css'] = 'css/styles.css';

$app['assetic.input.path_to_js'] = array(
    $app['assetic.input.path_to_assets'] . '/js/lib/angular/angular.min.js',
    $app['assetic.input.path_to_assets'] . '/js/lib/angular-route/angular-route.min.js',
    $app['assetic.input.path_to_assets'] . '/js/lib/angular-bootstrap/ui-bootstrap-tpls.min.js',
    //$assetPath . '/bootstrap/js/*.js',
    $app['assetic.input.path_to_assets'] . '/js/script.js',
);
$app['assetic.output.path_to_js'] = 'js/scripts.js';

// Doctrine (db)
$app['db.options'] = array(
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'dbname' => 'silex_kitchen',
    'user' => 'root',
    'password' => '',
);

// User
$users = $app->share(function () use ($app) {
    return new \Tomsaver\Service\UserProvider(null);
});

// Firewall
$app['security.firewalls'] = array(
    'admin' => array(
        'pattern' => '^/',
        'form' => array(
            'login_path' => '/security/login',
            'username_parameter' => 'form[username]',
            'password_parameter' => 'form[password]'
        ),
        'logout' => true,
        'anonymous' => true,
        'users' => $users,
    ),
);
