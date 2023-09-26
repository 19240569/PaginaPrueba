<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("Location: index.php");
    exit();
}
$usuario = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $usuario; ?>!</h1>
    <p>Aquí encontrarás información sobre Guanajuato.</p>
</body>
</html>
