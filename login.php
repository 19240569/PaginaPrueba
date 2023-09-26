<?php
session_start();

$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

if ($usuario === "fernanda" && $contrasena === "19240569") {
    $_SESSION["usuario"] = $usuario;
    header("Location: index.php");
} else {
    echo "Credenciales inválidas. Intenta de nuevo.";
}
?>
