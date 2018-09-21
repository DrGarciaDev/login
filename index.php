<?php
  session_start();
  ob_start();
  $titulo = "INGRESAR";
  include('include/header.php');
  
  if(isset($_SESSION['usuario'])){
    session_destroy();
  }
?>
  <div class="container">
    
      <div class="row">
        
        <div class="col s3">
          
        </div>

        <div class="col l6 s6 center">

          <h2 class="header orange-text">Iniciar Sesion</h2>
            
          <form action="valida_usuario" method="POST">
            <div class="input-field">
              <i class="material-icons prefix">email</i>
              <input type="text" name="usuario" id="usuario" class="validate" required>
              <label for="usuario" data-error="Error" data-success="Correcto">Usuario</label>
            </div>
            <div class="input-field">
              <i class="material-icons prefix">lock</i>
              <input type="password" name="password" id="password" class="validate" required>
              <label for="password">Password</label>
            </div>
            
              <button class="btn waves-effect waves-light" type="submit">Entrar
                <i class="material-icons right">send</i>
              </button>
              <!--<a href="index" class="btn waves-effect waves-light red" role="button">Cancelar</a>-->
              <br>
          </form>
        </div>

        <div class="col s3">
          
        </div>

      </div>
        <!-- <a href="formRegistroDeUsuarios.php" style = "color: blue; font-size: 10pt;" >Registrar nuevo usuario</a> -->
  </div>
<?php include('include/footer.php') ?>
