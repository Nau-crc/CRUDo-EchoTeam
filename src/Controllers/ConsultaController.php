<?php

// porque usar App y namespace
namespace App\Controllers;

use App\Models\Consulta;
use App\Views\View;

class ConsultaController 
{

    public function __construct()
    {   
        if(isset($_GET) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }

        if(isset($_GET) && ($_GET["action"] == "save")) {
            $this->save($_POST);
            return;
        }

        $this->index();
    }
   
    public function index(): void
    {
        $consulta = new Consulta();
        $consultas = $consulta->crearListaConsultas();
        
        new View ("ListaConsultas", ["consultas" => $consultas,]);
      
    }

<<<<<<< HEAD
    public function create(): void
    {
        new View ("CrearConsulta");

    }
    
    public function save($request): void
    {
       $consulta = new consulta($request["name"],["tema"]);
       $consulta->savedb();

    }
=======
    public function deleteConsulta(){

        

    }

>>>>>>> 3fda0a1937fec4b91266eac25a2a76a4c48c91ec
    
}



