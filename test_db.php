<?php
require_once __DIR__ . '/config/config.php';

try {
    $stmt = $pdo->query("SELECT 1");
    echo "✅ Conexión exitosa a la base de datos";
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
