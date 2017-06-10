<?php

namespace app\Service;

use Silex\Application;
use Silex\ServiceProviderInterface;

class DespesaRouterProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {

        $app->get('/reclamacao/', "reclamacao:index");
        $app->get('/recalamacao/busca-resposta', "reclamacao:getresposta")
            ->bind('getResposta');

    }

    public function boot(Application $app)
    {
    }
}
