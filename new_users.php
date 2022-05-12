<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "navbar.php" ?>
    <title>USUARIOS</title>
</head>

<body>

    <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
                <h3>Nuevo Usuario</h3>
                <hr>
                <form method="post" action="registro.php">
                    <div class="form-group">
                        <label for="usuario">Nombre del Usuario</label>
                        <input id="usuario" class="form-control" type="text" name="usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password" required>
                    </div><br>
                    <button class="btn btn-primary" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#guardar">Guardar</button>
                    <div class="modal fade" tabindex="-1" id="guardar" aria-labelledby="ModalFade" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><strong>Alerta!</strong></h5>
                                    <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"><button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Desea Guardar cambios?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" name="registro" type="submit">SI</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="admin_users.php" class="btn btn-large btn-danger"><i class="glyphicon glyphicon-backward"></i>Cancelar</a>
                </form>
            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>