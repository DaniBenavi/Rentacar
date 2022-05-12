<?php


class crud
{

    private $db;

    function __construct($conn)
    {
        $this->db = $conn;
    }
    //Muestra los datos en la tabla
    public function dataview($query)
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute() > 0;
        echo '<a class="btn btn-large btn-success" href="new_auto.php"> Agregar Auto</a><br>';
        echo '<br>';



        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>

            <tr>
                
                <td><?php echo $row['matricula']; ?></td>
                <td><?php echo $row['marca']; ?></td>
                <td><?php echo $row['modelo']; ?></td>
                <td><?php echo $row['TipoVehiculo']; ?></td>
                <td><?php echo $row['precio']; ?></td>
                <td><?php echo $row['nombre_cliente']; ?></td>
                <td><?php echo $row['telefono_cliente']; ?></td>
                <td><?php echo $row['rentador']; ?></td>
                <td>
                    <a class="btn btn-large btn-success" href="edit_autos.php?edit_id=<?php echo $row['matricula'] ?>"> Editar</a>
                </td>
                <td>
                    <a class="btn btn-large btn-danger" href="eliminar_auto.php?delete_id=<?php echo $row['matricula'] ?>"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>
                </td>



            </tr>

<?php

        }
    }

    public function update($matricula, $marca, $modelo, $TipoVehiculo, $precio, $nombre_cliente, $telefono_cliente, $rentador)
    {
        try {
            $stmt = $this->db->prepare("UPDATE autos SET marca=:marca, modelo=:modelo,TipoVehiculo=:TipoVehiculo,precio=:precio,nombre_cliente=:nombre_cliente,telefono_cliente=:telefono_cliente,rentador=:rentador
            WHERE matricula=:matricula");
            $stmt->bindparam(":marca", $marca);
            $stmt->bindparam(":modelo", $modelo);
            $stmt->bindparam(":TipoVehiculo", $TipoVehiculo);
            $stmt->bindparam(":precio", $precio);
            $stmt->bindparam(":nombre_cliente", $nombre_cliente);
            $stmt->bindparam(":telefono_cliente", $telefono_cliente);
            $stmt->bindparam(":rentador", $rentador);
            $stmt->bindparam(":matricula", $matricula);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function getID($matricula)
    {
        $stmt = $this->db->prepare("SELECT * FROM autos WHERE matricula=:matricula");
        $stmt->execute(array(":matricula" => $matricula));
        $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
    }
    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM  autos WHERE matricula=:matricula");
        $stmt->bindparam(":matricula", $id);
        $stmt->execute();
        return true;
    }
}
