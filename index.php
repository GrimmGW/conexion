<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>New project</title>
</head>

<body>
    <h1 class="text-center p-3">Prueba de conexion</h1>
    <div class="container-fluid row">
        <form class="col-4 p-4" method="POST">
            <h3 class="text-center">Registro de usuarios</h3>
            <?php
            include "model/conn.php";
            include "controller/new_user.php";
            include "controller/delete_user.php"
            ?>
            <div class="mb-3">
                <label for="formNombreLabel" class="form-label">Escribe tu nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="formApellidoLabel" class="form-label">Escribe tu apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="formCedulaLabel" class="form-label">Escribe tu cédula</label>
                <input type="text" class="form-control" name="cedula">
            </div>
            <div class="mb-3">
                <label for="formEmailLabel" class="form-label">Coloca tu correo</label>
                <input type="email" class="form-control" name="email">
            </div>

            <button type="submit" class="btn btn-warning" name="btnregister" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Cédula</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include "model/conn.php";
                    $sql = $conn->query(" select * from personas ");
                    while ($datos = $sql->fetch_object()){ ?>
                    
                    <tr>
                        <th><?= $datos->id ?></th>
                        <th><?= $datos->nombre ?></th>
                        <td><?= $datos->apellido ?></td>
                        <td><?= $datos->cedula ?></td>
                        <td><?= $datos->email ?></td>
                        <td>
                           <a href="edit_index.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen"></i></a> 
                           <a onclick="return confirm('Deseas borrar este usuario?')" href="index.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a> 
                        </td>
                    </tr>

                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>