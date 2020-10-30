<?php
require("Database.php");

$database = new App\Database();

$consultas = $database->mysql->query("select * FROM consultas");


echo "<ul>";
foreach ($consultas as $consulta) {
    echo "
    <li> {$consulta["ID"]} - {$consulta["Nombre Coder"]} - {$consulta["Tema"]} - {$consulta["Fecha"]} </li>;
    <a href='src/EditarCita.php?ID={$consulta["ID"]}'>Update</a>";
}

echo "</ul>";

?>

<a href="nueva-cita.php">NUEVO</a>