<?php
//recibimos las variables de index.html
$titulo = "ADMINISTRACION";


$bandera=0;
$_SESSION['usuario'] = $_POST["usuario"];
$password = $_POST["password"];
$vusuario ="adm";

include('include/header.php');

//conectamos la base de datos
$server="localhost";
$user="id127413_mario";
$pass="mario";
$bd="id127413_datos";
$conexion=new mysqli($server,$user,$pass,$bd);
//creamos la sentencia a ejecutar
$sql="SELECT * FROM fraccionamiento where NoCasa = '".$_SESSION['usuario']."' ";
//"Select * FROM fraccionamiento where NoCasa= 'adm'";
$resultado=$conexion->query($sql);

if($resultado){
    
    //muestroDatos
    while($row =mysqli_fetch_assoc($resultado)){
        $bandera=1;
       
        $numeroCasa=$row['NoCasa'];//adm
        $passwd=$row['Password'];
        $propietario=$row['nombreP'];
        $deuda=$row['Adeudo'];
        
        if($numeroCasa == $vusuario){

            echo "<center>";
            echo "<img src='https://i.pinimg.com/originals/a5/8a/e6/a58ae648c4eef0537c14cece8ce272f5.png' height='100' width='300' >  ";
            echo "<h1>";
            echo "Adminstracion";
            echo "</h1>";
            echo "<br>";
            echo "Bienvenido:  ";
            echo $_SESSION['usuario'];
            echo 
                "
                <br>
                <br>
                <br>
                "; 
           
            echo 
                "
                <a class='btn btn-succes' href='agregar.php'>AGREGAR
                    <i class='material-icons right'>add_box</i>
                </a>

                <button class='btn waves-effect orange' type='submit'>EDITAR
                    <i class='material-icons right'>edit</i>
                </button>

                <button class='btn waves-effect red' type='submit'>ELIMINAR
                    <i class='material-icons right'>delete</i>
                </button>

                <button class='btn waves-effect waves-light' type='submit'>SALIR
                    <i class='material-icons right'>close</i>
                </button>
                ";
            
            echo "</center>";

        }else{
            ?>
                <center>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjVlmbY3zP9BqZD9gXudrQKK9kBXSuGVJlTEQclW7iX8pkzqFr">
                <h1>Usuario no se encontro</h1>
                <a href="index.php">Regresar</a>
                </center>
    <?php
            }
    }//Fin del while
    if($bandera==0){
        echo "no estas registrado";
    }
    
}

include('include/footer.php');

?>