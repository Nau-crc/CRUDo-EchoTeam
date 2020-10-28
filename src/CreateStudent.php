<?php

use phpDocumentor\Reflection\Location;

require("Database.php");



if (!empty($_POST)) {
    $database = new App\Database();
    /* echo "Enviado por método: POST";
    var_dump($_POST); */
    

    $database->mysql->query("INSERT INTO `consultas` (`Nombre Coder`, `Tema`) VALUES ('{$_POST["nameCoder"]}','{$_POST["temaProblema"]}');");
    
        header('Location: ../index.php');
    }


    
    
    
        



?>

<h1>Nuevo Estudiante</h1>

<form action="CreateStudent.php" method="post">
    <input type="text" name="nameCoder">
    <input type="text" name="temaProblema">
    
    <input type="submit" value="Crear">
</form>