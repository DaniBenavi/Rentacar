<?php
include_once 'config.php';
include_once 'class/autos.php';
$crud = new crud($conn);
if (isset($_POST['btn-delete'])) {
    $id = $_GET['delete_id'];
    $crud->delete($id);
    header("Location:eliminar_auto.php?alerta");
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
    <title>DELETE</title>
</head>

<body>
    <div class="container"><br>
        <?php
        if (isset($_GET['alerta'])) {
        ?>
            <div class="alert alert-success">
                <strong>Hecho!</strong> Auto Eliminado Correcctamente! <br>

                <a href="admin_autos.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i>Ok</a>
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-danger">
                <strong>Alerta!</strong> Esta Seguro que requiere Eliminar el Auto
            </div>
        <?php
        }
        ?>
        <?php
        if (isset($_GET['delete_id'])) {
        ?>
            <table class='table table-bordered'>
                <tr>
                    <th>Matricula</th>
                    <th>marca</th>
                    <th>modelo</th>
                    <th>Tipo de vehiculo</th>
                    <th>Precio</th>
                    <th>Nombre del cliente</th>
                    <th>Telefono del cliente</th>
                    <th>Nombre del Encargado</th>
                </tr>
                <?php
                $stmt = $conn->prepare("SELECT * FROM autos WHERE matricula=:matricula");
                $stmt->execute(array(":matricula" => $_GET['delete_id']));
                while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
                ?>
                    <tr>
                        <td><?php echo ($row['matricula']); ?></td>
                        <td><?php echo $row['marca']; ?></td>
                        <td><?php echo $row['modelo']; ?></td>
                        <td><?php echo $row['TipoVehiculo']; ?></td>
                        <td><?php echo $row['precio']; ?></td>
                        <td><?php echo $row['nombre_cliente']; ?></td>
                        <td><?php echo $row['telefono_cliente']; ?></td>
                        <td><?php echo $row['rentador']; ?></td>

                    </tr>
                <?php
                }
                ?>
            </table>
        <?php
        }
        ?>
    </div>
    <div class="container">
        <p>
            <?php
            if (isset($_GET['delete_id'])) {
            ?>
        <form method="POST">
            <input type="hidden" name="matricula" value="<?php echo $row['matricula']; ?>" />
            <button class="btn btn-large btn-primary" type="submit" name="btn-delete"><i class="glyphicon glyphicon-trash"></i> Yes</button>
            <a href="admin_autos.php" class="btn btn-large btn-danger"><i class="glyphicon glyphicon-backward"></i> No</a>
        </form>
    <?php
            } else {
    ?>

    <?php
            }
    ?>
    </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>