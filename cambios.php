<?php //codigo cambios
include('include/header.php');

if(isset($_POST['submit'])) 
{
    $nocasa=$_POST['Nocasa'];
    //script de busqueda y altera
    $con=mysqli_connect("localhost","id127413_mario","mario","id127413_datos");
    $sql="SELECT * FROM `fraccionamiento` WHERE NoCasa=$nocasa";
      $retval=(mysqli_query($con,$sql));
     if(mysqli_num_rows($retval)>0){
       while($row=mysqli_fetch_assoc($retval)){
           ?>
           <center>
   <img src="https://craluminios.com.ar/wp-content/uploads/2017/04/d02-600x450.png" height=300 width=250>
   <br>
   <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       <h1>Cambioss</h1>
       <br>
       Numero de Casa:
       <input type="text" name="Nocasa" disabled value="<?php echo $row['NoCasa']; ?>" ><br>
       Password:
       <input type="text" name="password" value="<?php echo $row['Password']; ?>" ><BR>
       Propietario:
       <input type="text" name="propietario" value="<?php echo $row['nombreP']; ?>" ><br>
       Adeudo:
       <input type="text" name="adeudo" value="<?php echo $row['Adeudo']; ?>" ><br>
       <input type="submit" name="submit" value="Cambiar">
  </form>
</center>
           <?php
       }     
     }else{
         
     }
      mysqli_close($con);
    
}else{
    //forma de cambios
?>

<center>
   <img src="https://craluminios.com.ar/wp-content/uploads/2017/04/d02-600x450.png" height=300 width=250>
   <br>
   <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       <h1>Cambios</h1>
       <br>
       Número de Casa:
       <input type="text" name="Nocasa"><br>
       Password:
       <input type="text" name="password" disabled><BR>
       Propietario:
       <input type="text" name="propietario"disabled><br>
       Adeudo:
       <input type="text" name="adeudo" disabled><br>
       <input type="submit" name="submit" value="Buscar">
  </form>
</center>
<?php    
}

include('include/footer.php');

?>