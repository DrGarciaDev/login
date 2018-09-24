<?php //codigo cambios
include('include/header.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $nocasa         = $_POST['Nocasa'];
    $password       = $_POST['Password'];
    $propietario    = $_POST['Propietario'];
    $adeudo         = $_POST['Adeudo'];
    //script de agregar
    $con=mysqli_connect("localhost","id127413_mario","mario","id127413_datos");
    $sql="INSERT INTO fraccionamiento(NoCasa,Password,nombreP,Adeudo) 
    VALUES('$nocasa', '$password', '$propietario', '$adeudo')";
    $retval=(mysqli_query($con,$sql));

    if ($retval > 0) {
        echo "<script>alert('Registro agregado con éxito');</script>";
    }else {
        echo "<script>alert('Registro NO agregado');</script>";
    }
    mysqli_close($con);
    
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

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>Agregar</h1>
            <div class="input-field">
                <input id="Nocasa" name="Nocasa" type="text" data-length="10" required>
                <label for="Nocasa">No Casa</label>
            </div>
            <div class="input-field">
                <input id="Password" name="Password" type="text" data-length="10" required>
                <label for="Password">Password</label>
            </div>
            <div class="input-field">
                <input id="Propietario" name="Propietario" type="text" data-length="10" required>
                <label for="Propietario">Propietario</label>
            </div>
            <div class="input-field">
                <input id="Adeudo" name="Adeudo" type="text" data-length="10" required>
                <label for="Adeudo">Adeudo</label>
            </div>
            <div class="input-field">
                <button class='btn waves-effect blue' type='submit'>AGREGAR
                    <i class='material-icons right'>add_box</i>
                </button>
            </div>
            <div class="input-field">
                <a class='btn waves-effect red' href='salir.php'>SALIR
                    <i class='material-icons right'>close</i>
                </a>
            </div>
        </form>
        </div>

        </div>
        
        <div class="col s3">
    </div>
</center>
</div>

<?php include('include/footer.php'); ?>