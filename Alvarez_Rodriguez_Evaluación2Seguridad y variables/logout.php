<?php
/**
 * Archivo: logout.php
 * Descripción: Cierra la sesión del usuario
 */

session_start();

// Eliminar variables de sesión
$_SESSION = array();

// Destruir sesión (RECOMENDADO agregar esto)
session_destroy();

// Redirigir al login
header("Location: login.php");
exit();
?>