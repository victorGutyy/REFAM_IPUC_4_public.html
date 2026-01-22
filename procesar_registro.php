<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require_once __DIR__ . "/src/database.php"; // deja $pdo disponible

// Verificar si el usuario está autenticado
if (!isset($_SESSION["usuario_nombre"])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("❌ Método no permitido");
}

// Recibir datos
$id               = isset($_POST["registro_id"]) && $_POST["registro_id"] !== "" ? (int)$_POST["registro_id"] : null;
$nombre_completo  = trim($_POST["nombre_completo"] ?? "");
$fecha_nacimiento = $_POST["fecha_nacimiento"] ?? "";
$direccion        = trim($_POST["direccion"] ?? "");
$telefono         = trim($_POST["telefono"] ?? "");
$correo           = trim($_POST["correo_electronico"] ?? "");

$tiempo_bautizado  = trim($_POST["tiempo_bautizado"] ?? "");
$promesado         = isset($_POST["promesado"]) ? (int)$_POST["promesado"] : 0;
$experiencia_refam = trim($_POST["experiencia_refam"] ?? "");
$lugar_refam       = trim($_POST["lugar_refam"] ?? "");
$nivel_clase       = trim($_POST["nivel_clase"] ?? "");

// Validación mínima
if ($nombre_completo === "" || $fecha_nacimiento === "" || $direccion === "" || $telefono === "" || $correo === "") {
    die("❌ Faltan campos obligatorios");
}

// Normalizar vacíos a NULL para campos opcionales
$tiempo_bautizado  = $tiempo_bautizado === "" ? null : $tiempo_bautizado;
$experiencia_refam = $experiencia_refam === "" ? null : $experiencia_refam;
$lugar_refam       = $lugar_refam === "" ? null : $lugar_refam;
$nivel_clase       = $nivel_clase === "" ? null : $nivel_clase;

try {
    if ($id) {
        // UPDATE
        $sql = "UPDATE membresia SET
                    nombre_completo = :nombre_completo,
                    fecha_nacimiento = :fecha_nacimiento,
                    direccion = :direccion,
                    telefono = :telefono,
                    correo_electronico = :correo_electronico,
                    tiempo_bautizado = :tiempo_bautizado,
                    promesado = :promesado,
                    experiencia_refam = :experiencia_refam,
                    lugar_refam = :lugar_refam,
                    nivel_clase = :nivel_clase
                WHERE id = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":nombre_completo"    => $nombre_completo,
            ":fecha_nacimiento"   => $fecha_nacimiento,
            ":direccion"          => $direccion,
            ":telefono"           => $telefono,
            ":correo_electronico" => $correo,
            ":tiempo_bautizado"   => $tiempo_bautizado,
            ":promesado"          => $promesado,
            ":experiencia_refam"  => $experiencia_refam,
            ":lugar_refam"        => $lugar_refam,
            ":nivel_clase"        => $nivel_clase,
            ":id"                 => $id,
        ]);
    } else {
        // INSERT
        $sql = "INSERT INTO membresia
                (nombre_completo, fecha_nacimiento, direccion, telefono, correo_electronico,
                 tiempo_bautizado, promesado, experiencia_refam, lugar_refam, nivel_clase)
                VALUES
                (:nombre_completo, :fecha_nacimiento, :direccion, :telefono, :correo_electronico,
                 :tiempo_bautizado, :promesado, :experiencia_refam, :lugar_refam, :nivel_clase)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":nombre_completo"    => $nombre_completo,
            ":fecha_nacimiento"   => $fecha_nacimiento,
            ":direccion"          => $direccion,
            ":telefono"           => $telefono,
            ":correo_electronico" => $correo,
            ":tiempo_bautizado"   => $tiempo_bautizado,
            ":promesado"          => $promesado,
            ":experiencia_refam"  => $experiencia_refam,
            ":lugar_refam"        => $lugar_refam,
            ":nivel_clase"        => $nivel_clase,
        ]);
    }

    header("Location: dashboard.php");
    exit();

} catch (PDOException $e) {
    die("❌ Error al guardar: " . $e->getMessage());
}
