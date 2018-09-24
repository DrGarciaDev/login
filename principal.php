<?php
session_start();

$titulo = "ADMINISTRACION";
include('include/header.php');

?>

<center>
    
    <img src='https://i.pinimg.com/originals/a5/8a/e6/a58ae648c4eef0537c14cece8ce272f5.png' height='100' width='300' >  
    <h1>
    Adminstracion
    </h1>
    
    <br>
    Bienvenido: <?php echo $_SESSION['usuario']; ?>
    
    <br>
    <br>
    <br>

    <a class='btn waves-effect blue' href='agregar.php'>AGREGAR<i class='material-icons right'>add_box</i></a>

    <a class='btn waves-effect orange' href='editar.php'>EDITAR<i class='material-icons right'>edit</i></a>

    <a class='btn waves-effect red' href='eliminar.php'>ELIMINAR<i class='material-icons right'>delete</i></a>

    <a class='btn waves-effect waves-light' href='salir.php'>SALIR<i class='material-icons right'>close</i></a>

</center>

<?php include('include/footer.php'); ?>