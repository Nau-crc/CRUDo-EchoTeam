<?php

namespace App\Models;

use App\Database;

class Consulta {


    public $database;
    public $id;
    public $name;
    public $tema;
    public $fecha;

    public function __construct($id = null, $name = "", $tema = "", $fecha = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->tema = $tema;
        $this->fecha = $fecha;
        if(!$this->database) {
            $this->database = new Database();
        }
    }

    public function crearListaConsultas ()
    {
        $query = $this->database->mysql->query("select * FROM consultas");
     
        // Para que serve el fetchAll??????

        // $consultasArray = $query->fetchAll();

        $listaConsultas = [];

            foreach ($query as $consulta) {
                $itemConsulta = new Consulta($consulta["id"], $consulta["name"],  $consulta["tema"], $consulta["fecha"]);
                array_push($listaConsultas, $itemConsulta);
            }
            
        return $listaConsultas;
    }
    

    public function crearConsulta () 
    {
        $this->database->mysql->query("INSERT INTO `consultas` (`name`, `tema`) VALUES ('{$_POST["name"]}','{$_POST["tema"]}');");
    }
}

