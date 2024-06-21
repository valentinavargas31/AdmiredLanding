<?php
$controller = isset($_GET['c']) ? $_GET['c'] : 'Dashboard';
$controller = $controller . 'controller';
$method = isset($_GET['m']) ? $_GET['m'] : 'dashboard';

require_once('./controllers/' . $controller . '.php');
$objet = new $controller();
$objet->$method();
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página principal</title>
</head>
<body>
    <h1>Bienvenido a AdmiredLanding</h1>
    <a href="login.php">Iniciar sesión</a> <!-- Enlace al formulario de inicio de sesión -->
</body>
</html>
