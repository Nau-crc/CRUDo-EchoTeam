<?php

use phpDocumentor\Reflection\Location;

require("Database.php");



if (!empty($_POST)) {
    $database = new App\Database();
    /* echo "Enviado por método: POST";
    var_dump($_POST); */
    

    $database->mysql->query("INSERT INTO `consultas` (`Nombre Coder`, `Tema`) VALUES ('{$_POST["nameCoder"]}');");
    $database->mysql->query("INSERT INTO `consultas` (`Tema`) VALUES ('{$_POST["temaProblema"]}');");

    /* $database->mysql->query("INSERT INTO consultas (Nombre Coder, Tema) VALUES ('{".$_POST['nameCoder']."','".$_POST['temaProblema']."}')"); */
    /* mysql_query("INSERT INTO users (column 1, column2) VALUES ('".$_POST['value1']."', '".$_POST['value2']."')"); */
    
    
        

    header('Location: ../index.php');
}



?>

<h1>Nuevo Estudiante</h1>

<form action="CreateStudent.php" method="post">
    <input type="text" name="nameCoder">
    <input type="text" name="temaProblema">
    
    <input type="submit" value="Crear">
</form>