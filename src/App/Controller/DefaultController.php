<?php
namespace App\Controller;

header("Access-Control-Allow-Origin: *");

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Utils\UtilsString;
use App\Repository\BaseRepository;


use Tgallice\Wit\Client;
use Tgallice\Wit\MessageApi;


class DefaultController
{


    private $twig;
    private $trataString;
    private $logger;
    private $repository;


    public function __construct(\Twig_Environment $twig, LoggerInterface $logger)
    {
        $this->twig = $twig;
        $this->logger = $logger;

        $this->trataString = new UtilsString();

        $this->repository = new BaseRepository();
    }

    public function indexAction()
    {
        $this->logger->debug('Executing DefaultController::indexAction');

        return $this->twig->render('index.twig');
    }


    public function indexReclamacao()
    {

        return $this->twig->render('reclamacao.twig');
    }



     public function getCategorias()
        {            
            $categorias = $this->repository->getListaCategorias();

            foreach($categorias as $key => $f) {

                $for[$key]['id'] = intval($f['idcategoria']);
                $for[$key]['name'] = $f['nmcategoria'];
                $for[$key]['icon'] = $f['dsicone'];
            }


            return new JsonResponse($for);
        }

     public function getSubCategorias()
        {
            
            $subcategorias = $this->repository->getListaSubCategorias();

            foreach($subcategorias as $key => $f) {

                $for[$key]['id'] = intval($f['iddetcategoria']);
                $for[$key]['categoryId'] = intval($f['idcategoria']);
                $for[$key]['name'] = $f['nmdetcategoria'];
                $for[$key]['icon'] = $f['dsicone'];
            }


            return new JsonResponse($for);
        }



     public function getPerguntas($idsubcat){

            $subcategorias = $this->repository->getListaPerguntas($idsubcat);

            foreach($subcategorias as $key => $f) {
                $for[$key]['id'] = intval($f['idpergunta']);
                $for[$key]['title'] = $f['dstitulo'];
                $for[$key]['description'] = $f['dspergunta'];
            }


            return new JsonResponse($for);
        }


    public function getTrataPergunta(Request $request)
        {
            $pergunta = $request->get('pergunta');
            

            $client = new Client('SM4D5UAN6A76J53QMZL3ETBQBOBM6DJT');
            $response = $client->get('/message', ['q' => $pergunta,]);
            $traducao = json_decode((string) $response->getBody(), true);


            $resultado =$traducao["entities"];
            $intencao  = $resultado["intencao"];
            $categoria  = $resultado["categoria"];


            return $this->twig->render('respostas.twig',
            [
                 'intencao' => $intencao[0]["value"],
                 'categoria'=> $categoria[0]["value"],
            ]); 

        }


}
