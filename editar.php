<?php //codigo cambios
include('include/header.php');

$con=mysqli_connect("localhost","id127413_mario","mario","id127413_datos");

if(isset($_POST['submit'])) { 
  //script de busqueda y altera
  if ($_POST['submit'] == "Cambiar") {
    $nocasa         = $_POST['Nocasa'];
    $password       = $_POST['Password'];
    $propietario    = $_POST['Propietario'];
    $adeudo         = $_POST['Adeudo'];
    echo "<script>alert('Campos: ".$password." ".$propietario." ".$adeudo." -- ".$nocasa."'); </script>";

    $sql_editar = "UPDATE fraccionamiento SET Password = '$password', nombreP = '$propietario', Adeudo = '$adeudo' WHERE NoCasa = '$nocasa' ";
    //echo("$sql_editar");
    if ($con->query($sql_editar) === TRUE) {
        echo "<script>alert('Actualizado con éxito...'); </script>";
    } else {
        echo "<script>alert('Error updating record: ".$con->error."');</script>";
    }
    //$con->close();
  }//FIN DE LA EDICION

  if ($_POST['submit'] == "Buscar") {
    $nocasa=$_POST['Nocasa'];
    //$con=mysqli_connect("localhost","id127413_mario","mario","id127413_datos");
   
    $sql="SELECT * FROM fraccionamiento WHERE NoCasa=$nocasa";
    $retval=(mysqli_query($con,$sql));
    if(mysqli_num_rows($retval)>0){
      while($row=mysqli_fetch_assoc($retval)){
        ?>
        <div class="container">
          <div class="row">
            <div class="col s3">

            </div>

            <div class="col s6">
              <center>
                <img src="https://craluminios.com.ar/wp-content/uploads/2017/04/d02-600x450.png" height=300 width=250>
                <br>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                  <h1>Editar campos</h1>
                  <br>
                  Numero de Casa:
                  <input type="text" name="Nocasa" readonly value="<?php echo $row['NoCasa']; ?>" required><br>
                  Password:
                  <input type="text" name="Password" value="<?php echo $row['Password']; ?>" required><br>
                  Propietario:
                  <input type="text" name="Propietario" value="<?php echo $row['nombreP']; ?>" required><br>
                  Adeudo:
                  <input type="text" name="Adeudo" value="<?php echo $row['Adeudo']; ?>" required><br>
                  <input class="btn waves-effect blue" type="submit" name="submit" value="Cambiar">
                  <!-- <a class='btn waves-effect red' href='salir.php'>SALIR
                    <i class='material-icons right'>close</i>
                  </a>
                -->
                </form>
              </center>
            </div>

            <div class="col s3">

            </div>
          </div>
        </div>
         <?php
      }//FIN WHILE
    }//FIN IF HAY REGISTROS     
  } ?>
    <div class="container">
      <div class="row">
        <div class="col s3">

        </div>

        <div class="col s6">
          <center>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h1>Buscar casa para editar</h1>
            <br>
            Número de Casa:
            <input type="text" name="Nocasa" required>
            <br>
            <input class="btn btn-succes" type="submit" name="submit" value="Buscar">
            <a class='btn waves-effect red' href='salir.php'>SALIR<i class='material-icons right'>close</i></a>
            </form>
          </center>
        </div>

        <div class="col s3">

        </div>
      </div>
    </div>
  <?php 
      //mysqli_close($con);
}else{
    //forma de cambios
  ?>
  <div class="container">
    <div class="row">
      <div class="col s3">

      </div>

      <div class="col s6">
        <center>
        <img src="https://craluminios.com.ar/wp-content/uploads/2017/04/d02-600x450.png" height=300 width=250>
        <br>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Buscar casa</h1>
        <br>
        Número de Casa:
        <input type="text" name="Nocasa" required><br>
        Password:
        <input type="text" name="password" disabled><BR>
        Propietario:
        <input type="text" name="propietario"disabled><br>
        Adeudo:
        <input type="text" name="adeudo" disabled><br>
        <input class="btn btn-succes" type="submit" name="submit" value="Buscar">
        <a class='btn waves-effect red' href='salir.php'>SALIR<i class='material-icons right'>close</i></a>
        </form>
        </center>
      </div>

      <div class="col s3">

      </div>
    </div>
  </div>
<?php    
}

include('include/footer.php');

?>