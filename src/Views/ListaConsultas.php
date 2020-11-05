<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<a href="?action=create">
<button type="button" class="btn btn-outline-dark">Crear Consulta</button>
</a>
  <table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Tema</th>
        <th scope="col">Hora</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>
    <tbody>
<?php
       foreach ($data["consultas"] as $consulta) 
        { echo "
                <tr>
                  <th scope='row'>{$consulta->id}</th> 
                  <td>{$consulta->name}</td>
                  <td>{$consulta->tema}</td>
                  <td>{$consulta->fecha}</td>
                  <td><button class= 'delete'>Delete</button></td>
                </tr>
                ";
        } 
      ?>
    </tbody>
  </table>
</body>


</html>