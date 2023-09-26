<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Guanajuato</title>
</head>
<body>

<?php
if(isset($_SESSION["usuario"])) {
    echo "<h1>Bienvenido, " . $_SESSION["usuario"] . "!</h1>";
    echo "<ul>
            <li><a href='historia.php'>Historia</a></li>
            <li><a href='cultura.php'>Cultura</a></li>
            <li><a href='gastronomia.php'>Gastronomía</a></li>
            <li><a href='turismo.php'>Turismo</a></li>
          </ul>";
    echo "<a href='cerrar_sesion.php'>Cerrar Sesión</a>";
} else {
    echo "<h1>Bienvenido a Guanajuato</h1>
          <form action='login.php' method='post'>
              Usuario: <input type='text' name='usuario'><br>
              Contraseña: <input type='password' name='contrasena'><br>
              <input type='submit' value='Iniciar Sesión'>
          </form>";
}

?>
</body>
</html>
