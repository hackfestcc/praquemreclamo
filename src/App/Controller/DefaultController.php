<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Utils\UtilsString;
use App\Repository\BaseRepository;

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

                $for[$key]['id'] = $f['idcategoria'];
                $for[$key]['name'] = $f['nmcategoria'];
                $for[$key]['icon'] = $f['dsicone'];
            }


            return new JsonResponse($for);
        }

     public function getSubCategorias()
        {
            
            $subcategorias = $this->repository->getListaSubCategorias();

            foreach($subcategorias as $key => $f) {

                $for[$key]['id'] = $f['iddetcategoria'];
                $for[$key]['categoryId'] = $f['idcategoria'];
                $for[$key]['name'] = $f['nmdetcategoria'];
                $for[$key]['icon'] = $f['dsicone'];
            }


            return new JsonResponse($for);
        }


    public function getTrataPergunta(Request $request)
        {
            $pergunta = $request->get('pergunta');
            
            $termos = $this->trataString->removePalavrasComuns($pergunta);

            var_dump($termos);

            //$termos = explode(" ", $pergunta);

            foreach($termos as $termo){
                print $termo."<br>";
            }

            die;

            $total=0;
            $for   = '{"Educação Básica":1,"Educação Superior":2,"Educação Indigena":3}';

            return new JsonResponse([
                "recordsTotal" => $total,
                "recordsFiltered" => $total,
                'data' => $for
            ]);
        }


}
