<?php
/**
 * Conexión a la base de datos
 */

$host = "localhost";
$bd   = "sistema_usuarios";
$user = "root";
$pass = "";

try {
   $conexion = new PDO("mysql:host=$host;dbname=$bd;charset=utf8mb4", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>