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
        <form class="col-4 p-4">
            <div class="mb-3">
                <label for="formNombre" class="form-label">Escribe tu nombre</label>
                <input type="text" class="form-control" id="formNombre" aria-describedby="nombrePersona">
            </div>
            <div class="mb-3">
                <label for="formApellido" class="form-label">Escribe tu apellido</label>
                <input type="text" class="form-control" id="formApellido" aria-describedby="apellidoPersona">
            </div>
            <div class="mb-3">
                <label for="formCedula" class="form-label">Escribe tu cédula</label>
                <input type="text" class="form-control" id="formCedula" aria-describedby="cedulaPersona">
            </div>
            <div class="mb-3">
                <label for="formEmail" class="form-label">Coloca tu correo</label>
                <input type="email" class="form-control" id="formEmail" aria-describedby="emailPersona">
            </div>

            <button type="submit" class="btn btn-warning">Registrar</button>
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
                           <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen"></i></a> 
                           <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a> 
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