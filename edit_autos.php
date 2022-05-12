<?php
session_start();
include('config.php');
include_once 'class/autos.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
$crud = new crud($conn);
//validacion del boton actualizar
if (isset($_POST['btn-update'])) {
    $matricula = $_GET['edit_id'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $TipoVehiculo = $_POST['TipoVehiculo'];
    $precio = $_POST['precio'];
    $nombre_cliente = $_POST['nombre_cliente'];
    $telefono_cliente = $_POST['telefono_cliente'];
    $rentador = $_POST['usuario'];
    //hace referencia a la funcion update
    if ($crud->update($matricula, $marca, $modelo, $TipoVehiculo, $precio, $nombre_cliente, $telefono_cliente, $rentador)) {
        $msg =' <b>WOW, Actualizacion exitosa!</b> <br> <a href="admin_autos.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i>Ok</a>
        ';
        
    } else {
        $msg = "<b>ERROR, algo anda mal</b>";
    }
}
if (isset($_GET['edit_id'])) {
    $id = $_GET['edit_id'];
    extract($crud->getID($id));
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>USUARIOS</title>
</head>

<body>

    <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
                <?php
                if (isset($msg)) {
                    echo $msg;
                }
                ?>
                <h3>Actualizar datos del auto</h3>
                <hr>
                <form method="post">
                    <div class="form-group">
                        <label for="matricula">Matricula</label>
                        <input id="matricula" value="<?php echo $matricula; ?>" class="form-control" type="text" name="matricula">
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input id="marca" value="<?php echo $marca; ?>" class="form-control" type="text" name="marca">
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input id="modelo" value="<?php echo $modelo; ?>" class="form-control" type="text" name="modelo">
                    </div>
                    <div class="form-group">
                        <label for="TipoVehiculo">Tipo de Vehiculo</label>
                        <input id="TipoVehiculo" value="<?php echo $TipoVehiculo; ?>" class="form-control" type="text" name="TipoVehiculo">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input id="precio" value="<?php echo $precio; ?>" class="form-control" type="text" name="precio">
                    </div>
                    <div class="form-group">
                        <label for="nombre_cliente">Nombre del Cliente</label>
                        <input id="nombre_cliente" value="<?php echo $nombre_cliente; ?>" class="form-control" type="text" name="nombre_cliente">
                    </div>
                    <div class="form-group">
                        <label for="telefono_cliente">Telefono del Cliente</label>
                        <input id="telefono_cliente" value="<?php echo $telefono_cliente; ?>" class="form-control" type="text" name="telefono_cliente">
                    </div>
                    <div class="form-group">

                        <label for=""><strong>Selecione el rentador</strong>
                            <select name="usuario" id="usuario">
                                <?php
                                include('config.php');
                                $query = $conn->prepare("SELECT * FROM usuarios");
                                $query->execute();
                                ?>
                                <?php foreach ($query as $rentador) : ?>
                                    <option value="<?php echo $rentador['username'] ?>"><?php echo $rentador['username'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </label>
                    </div>
                    <br>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#guardar">Actualizar</button>

                    <a href="admin_autos.php" class="btn btn-large btn-danger"><i class="glyphicon glyphicon-backward"></i>Cancelar</a>
                    
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
                                    <button class="btn btn-primary" name="btn-update" type="submit">SI</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>