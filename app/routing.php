<?php

/**
 * This file should be included from app.php, and is where you hook
 * up routes to controllers.
 *
 * @link http://silex.sensiolabs.org/doc/usage.html#routing
 * @link http://silex.sensiolabs.org/doc/providers/service_controller.html
 */

$app->get('/', 'app.default_controller:indexAction');

$app->get('/api/', "app.default_controller:indexReclamacao");

/*

*/
$app->get('/api/getcategorias', "app.default_controller:getCategorias");
$app->get('/api/getsubcategorias', "app.default_controller:getSubCategorias");
$app->get('/api/perguntas/{idsubcat}', "app.default_controller:getPerguntas");

 
//receberá
//pergunta
//categoria
//local
$app->get('/api/buscaresposta', "app.default_controller:getTrataPergunta");
$app->post('/api/buscaresposta', "app.default_controller:getTrataPergunta");