<?php
// src/database.php
// Este archivo existe para que el resto del proyecto pueda incluirlo.
// En local/producción la conexión real está centralizada en config/config.php (PDO).

require_once __DIR__ . '/../config/config.php';

// Compatibilidad por si algún archivo antiguo usa $conn (mysqli).
// OJO: lo ideal es migrar todo a $pdo, pero esto evita errores inmediatos.
$conn = null;
