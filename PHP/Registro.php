<?php 
$mensaje="";
require 'Conexion.php';
if(!empty($_POST["enviar"])){

$nombres = mysqli_real_escape_string($conexion, $_POST['Nombres']);
$apellidos = mysqli_real_escape_string($conexion, $_POST['Apellidos']);
$edad = mysqli_real_escape_string($conexion, $_POST['Edad']);


// Attempt insert query execution
$sql = "INSERT INTO `usuarios` (`Nombres`, `Apellidos`, `Edad`) VALUES "
        . "('$nombres', '$apellidos', '$edad')";
if(mysqli_query($conexion, $sql)){
    $mensaje = "Usuario registrado exitosamente!!!";
} else{
    $mensaje = "ERROR: No se puede ejecutar $sql. " . mysqli_error($conexion);
}
} 
// Close connection
mysqli_close($conexion);

?>

<html>
    <head>
        <title>Acme ® | Registro</title>
        <link rel="shortcut icon" href="../Imagenes/logo.png"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript"  src="../js/materialize.js"></script>
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <script>
       $(document).ready(function() {
         $(".button-collapse").sideNav();
     });
          
    </script>
        
    </head>
    <body>
        <nav class="teal lighten-2">
            <div class="nav-wrapper">
                <a href="../index.html" style="margin-left: 10px" class="brand-logo"><img alt="LOGO" src="../imagenes/logo.png" width="150"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="../index.html"><i class="material-icons left">home</i>Inicio</a></li>
                    <li><a href="../juegos.html"><i class="material-icons left">apps</i>Juegos</a></li>
                    <li><a href="Registro.php"><i class="material-icons left">people</i>Registro</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="../index.html"><i class="material-icons left">home</i>Inicio</a></li>
                    <li><a href="../juegos.html"><i class="material-icons left">apps</i>Juegos</a></li>
                    <li><a href="Registro.php"><i class="material-icons left">people</i>Registro</a></li>
                </ul>
            </div>
        </nav>

        <div class="row">
    <form class="col s12" action="Registro.php" name="Registro" method="POST">
      <div class="row">
        <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input  placeholder="Nombres" name="Nombres" id="first_name" type="text" class="validate">
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input placeholder="Apellidos" id="last_name" name="Apellidos" type="text" class="validate">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
            <i class="material-icons prefix">keyboard</i>
          <input placeholder="Edad" id="edad" name="Edad" type="number" class="validate">
        </div>
      </div>
        
        <input class="teal lighten-2 waves-effect waves-light btn" type="submit" name="enviar" value="Registrar">
    </form>
            <div> <?php echo $mensaje; ?></div>
  </div>
        <br>
        <br>
        <br>
        <footer class="page-footer grey darken-3">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Contacto.</h5>
                        <p class="grey-text text-lighten-4">info@acme.com</p>
                    </div>

                </div>
            </div>
            <div class="footer-copyright grey darken-4">
                <div class="container">
                    Acme © 2017 - Todos los derechos reservados.<br>

                </div>
            </div>
        </footer>
    </body>
</html>

