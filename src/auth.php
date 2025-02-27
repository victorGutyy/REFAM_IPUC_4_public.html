<?php
session_start();
require_once '../src/database.php';

// Mostrar errores para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'] ?? '';
    $password = $_POST['password'] ?? '';

    // Usuario administrador único
    $usuario_autorizado = "refamipuc4calarca@gmail.com";
    $password_autorizado = "Refam2025";

    if ($correo == $usuario_autorizado && $password == $password_autorizado) {
        $_SESSION["usuario_nombre"] = "Administrador";
        header("Location: ../dashboard.php");
        exit();
    } else {
        echo "❌ Error: Credenciales incorrectas, inténtalo de nuevo.";
    }
}
?>
