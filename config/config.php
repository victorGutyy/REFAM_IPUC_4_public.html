<?php
// Configuración de la conexión a la base de datos
$host = "srv1852.hstgr.io"; // Alternativamente, usa srv1852.hstgr.io si la IP no funciona
$dbname = "u127360908_refam4calarca";
$username = "u127360908_refam4ipuc"; 
$password = "Refam2025@"; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("❌ Error de conexión: Código " . $e->getCode() . " - " . $e->getMessage());
}
?>
