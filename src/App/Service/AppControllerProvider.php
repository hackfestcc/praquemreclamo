<?php

namespace app\Service;

use Silex\Application;
use Silex\ServiceProviderInterface;

class AppControllerProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
         $app['reclamacao'] = $app->share(function () use ($app) {
            return new \app\Controller\Reclamacao\RecalamacaoController($app);
        });

    }

    public function boot(Application $app)
    {
    }
}
