<?php
require("Database.php");
$database = new App\Database();
$id = $_GET["ID"];
// echo $id;
$consulta = $database->mysql->query("SELECT * FROM consultas WHERE ID={$id}");

// var_dump($consulta);
// echo $consulta[0];
$consultas = $consulta->fetchAll();
$cita = $consultas[0];
echo "
    <h1>Edita Cita</h1>

    <form action=CrearCita.php method=post>
        <input type=text name=nameCoder value={$cita["Nombre Coder"]}>
        <input type=text name=temaProblema value={$cita["Tema"]}>

        <input type=submit value=Update>
    </form>";
