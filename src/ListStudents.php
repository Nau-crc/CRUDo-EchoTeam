<?php
require("Database.php");

$database = new App\Database();

$consultas = $database->mysql->query("select * FROM consultas"); 


echo "<ul>";
foreach ($consultas as $consulta) {
    echo "
    <li> {$consulta["ID"]} - {$consulta["Nombre Coder"]} - {$consulta["Tema"]} - {$consulta["Fecha"]} </li>";
}
echo "</ul>";

?>

<a href="src/CreateStudent.php">NUEVO</a>