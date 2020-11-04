<?php

// porque usar App y namespace
namespace App\Controllers;

use App\Models\Consulta;

class ConsultaController 
{

    public function __construct()
    {
        $this->index();
    }
   
    public function index()
    {
        $consulta = new Consulta();
        $consultas = $consulta->crearListaConsultas();
        new View ("ListaConsultas", $listaConsultas) ;
      

    }

    
}



