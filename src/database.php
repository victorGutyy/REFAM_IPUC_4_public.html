<?php
$host = "srv1852.hstgr.io";
$dbname = "u127360908_refam4calarca";
$username = "u127360908_refam4ipuc";
$password = "Refam2025@";

// Crear conexión con MySQL
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
