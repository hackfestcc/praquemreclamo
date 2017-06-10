<?php

/**
 * This file should be included from app.php, and is where you hook
 * up routes to controllers.
 *
 * @link http://silex.sensiolabs.org/doc/usage.html#routing
 * @link http://silex.sensiolabs.org/doc/providers/service_controller.html
 */

$app->get('/', 'app.default_controller:indexAction');

$app->get('/reclamacao/', "app.default_controller:indexReclamacao");

/*

*/
$app->get('/reclamacao/getcategorias', "app.default_controller:getCategorias");
$app->get('/reclamacao/getsubcategorias/', "app.default_controller:getSubCategorias");


//receberá
//pergunta
//categoria
//local
$app->get('/reclamacao/buscaresposta/', "app.default_controller:getTrataPergunta");