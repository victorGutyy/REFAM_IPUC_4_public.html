<?php
session_start();

// Mostrar errores en el servidor para depuración
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("src/database.php");

// Definir el usuario y la contraseña únicos
$usuario_permitido = "refamipuc4calarca@gmail.com";
$password_permitido = "Refam2025"; // Puedes cambiar esta contraseña

// Verificar si la solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los datos llegan como JSON
    $data = json_decode(file_get_contents("php://input"), true);

    if ($data) {
        $correo = $data['correo'];
        $password = $data['password'];
    } else {
        $correo = $_POST['correo'] ?? '';
        $password = $_POST['password'] ?? '';
    }
    
    // Usuario administrador
    $usuario_permitido = "refamipuc4calarca@gmail.com";
    $password_permitido = "Refam2025";

    if ($correo === $usuario_permitido && $password === $password_permitido) {
        $_SESSION["usuario_nombre"] = "Administrador";
       echo json_encode(["mensaje" => "Inicio de sesión exitoso", "redirect" => "dashboard.php"]);
        exit();
    } else {
        echo json_encode(["error" => "Credenciales incorrectas, inténtalo de nuevo."]);
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - REFAM 2026</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="has-fixed-header">

<?php require_once __DIR__ . "/header.php"; ?>

    <div class="login-container">
    
        <h1>REFAM 2026 - IPUC 4TA CALARCÁ</h1>
        <h3>Marcos 16:15</h3>
        <p>vayan por todo el mundo y prediquen el evangelio a toda criatura.</p>

        <form id="login-form">
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Ingresar</button>
        </form>

        <div id="mensaje" class="error-message"></div>
    </div>

    <script>
   document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault();

    let correo = document.getElementById("correo").value.trim();
    let password = document.getElementById("password").value.trim();

    fetch("login.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ correo: correo, password: password })
    })
    .then(response => response.json()) // Convertimos la respuesta a JSON
    .then(data => {
        if (data.mensaje) {
            // Redirección automática si la autenticación es exitosa
            window.location.href = data.redirect;
        } else {
            document.getElementById("mensaje").innerText = data.error;
        }
    })
    .catch(error => {
        console.error("Error:", error);
        document.getElementById("mensaje").innerText = "Error en el servidor";
    });
});

</script>

</body>
</html>
