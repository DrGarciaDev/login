<?php //codigo cambios
    include('include/header.php');

    $con = mysqli_connect("localhost","id127413_mario","mario","id127413_datos");

    if ($conexion->connect_errno) {
        echo "ERROR DE CONEXION {$conexion->connect_errno}";
        die;
    }        
    //echo "<script>alert('No hay conexion');</script>";


    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $eliminar_casa  = $_POST['eliminar'];

        //script de agregar
        //$con=mysqli_connect("localhost","id127413_mario","mario","id127413_datos");
        $sql = "DELETE FROM fraccionamiento WHERE NoCasa = $eliminar_casa; ";
        
        if ($con->query($sql) === TRUE) {
            echo "<script>alert('Registro eliminado con éxito...');</script>";
        } else {
            echo "Error al eliminar el registro: " . $con->error;
        }

        //$con->close();

        /*
        $retval=(mysqli_query($con,$sql));

        if ($retval > 0) {
            echo "<script>alert('Registro agregado con éxito');</script>";
        }else {
            echo "<script>alert('Registro NO agregado');</script>";
        }
        mysqli_close($con);
        */
    }
?>
<div class="container">
<center>
   <img src="https://craluminios.com.ar/wp-content/uploads/2017/04/d02-600x450.png" height=300 width=250>
   <br>

    <div class="row">
        <div class="col s3">

        </div>
        
        <div class="col s6">
            <table class="striped highlight centered responsive-table">
                <thead>
                    <tr>
                        <th>No Casa</th>
                        <th>Password</th>
                        <th>Propietario</th>
                        <th>Adeudo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $resultado = $con->query("SELECT * FROM fraccionamiento;");
                    $count = $resultado->num_rows;
                    if ($count == 0) {
                        echo "<script>alert('NO');</script>";
                    }
                    while ($fila = $resultado->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $fila['NoCasa']; ?></td>
                        <td><?php echo $fila['Password']; ?></td>
                        <td><?php echo $fila['nombreP']; ?></td>
                        <td><?php echo $fila['Adeudo']; ?></td>
                        <td>
                            <form method="POST" action="">
                                <input type="hidden" id="eliminar" name="eliminar" value="<?php echo $fila['NoCasa']; ?>">
                                <button class="btn-floating waves-effect red" type="submit" name="action">
                                    <i class="material-icons right">close</i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <br>
            <br>
            <a class='btn waves-effect red' href='salir.php'>SALIR<i class='material-icons right'>close</i></a>
        </div>

        </div>
        
        <div class="col s3">
    </div>
</center>
</div>

<?php include('include/footer.php'); ?>