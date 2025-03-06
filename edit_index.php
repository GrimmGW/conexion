<?php

include "model/conn.php";
$id=$_GET["id"];
$sql=$conn->query(" select * from personas where id = $id ")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar usuario</title>
</head>

<body>
    <form class="col-4 p-4 m-auto" method="POST">
        <h3 class="text-center">Modificar usuarios</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
        include "controller/edit_user.php";
        while($datos = $sql->fetch_object()) {?>
        <div class="mb-3">
            <label for="formNombreLabel" class="form-label">Escribe tu nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
        </div>
        <div class="mb-3">
            <label for="formApellidoLabel" class="form-label">Escribe tu apellido</label>
            <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
        </div>
        <div class="mb-3">
            <label for="formCedulaLabel" class="form-label">Escribe tu cédula</label>
            <input type="text" class="form-control" name="cedula" value="<?= $datos->cedula ?>">
        </div>
        <div class="mb-3">
            <label for="formEmailLabel" class="form-label">Coloca tu correo</label>
            <input type="email" class="form-control" name="email" value="<?= $datos->email ?>">
        </div>
        <?php } ?>
        <div class="col text-center">
            <button type="submit" class="btn btn-warning" name="btnupdate" value="ok">Modificar</button>
        </div>
    </form>
</body>

</html>