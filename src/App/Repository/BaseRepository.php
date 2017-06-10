<?php

namespace App\Repository;

use \PDO;
use Silex\Application;

class BaseRepository
{

    private $data_source_name = "mysql:dbname=praquemreclamo;host=172.16.49.134;charset=utf8" ;
    private $conn;

    public function __construct()
    {
        $this->conecta();
    }

  
    private function conecta(){
            try {
              // data_source_name, login, senha e tratamento de erros
              $this->conn = new PDO($this->data_source_name, "app","hackfest", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
            
            } catch (Exception $exc) {
              $exc->getMessage();
            }
    }  




    public function getListaCategorias()
    {
        $sql = "   
            SELECT * from tcategoria where stativo = 1
        ";
    
        $statement_handle = $this->conn->prepare($sql);
        $statement_handle->execute();
        $response = $statement_handle->fetchAll(PDO::FETCH_ASSOC);
     
        return $response;
    }


    public function getListaSubCategorias()
    {
        $sql = " SELECT * from tdetalhecategoria where stativo = 1  ";
    
        $statement_handle = $this->conn->prepare($sql);
        $statement_handle->execute();
        $response = $statement_handle->fetchAll(PDO::FETCH_ASSOC);
     
        return $response;
    }


}
