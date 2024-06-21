<?php
session_start(); // Iniciar la sesión aquí para manejar la autenticación

// Incluir el archivo de configuración de la base de datos
require_once('config.php');

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Conectar a la base de datos
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta para verificar las credenciales
    $sql = "SELECT * FROM usuarios WHERE EMAIL = ? AND CONTRASENA = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Usuario autenticado correctamente
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("Location: headd.php"); // Redirigir a la página de headd.php
        exit;
    } else {
        // Usuario no encontrado o credenciales incorrectas
        $error = "Correo electrónico o contraseña incorrectos";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Ruta al archivo CSS -->
</head>
<body>
    <div class="contenedor__todo">
        <div class="caja__trasera">
            <div>
                <form class="formulario__login" method="POST" action="login.php">
                    <div class="login-container">
                        <h2>Iniciar sesión</h2>
                        <?php if (!empty($error)): ?>
                            <p class="error-message"><?php echo $error; ?></p>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="email">Correo electrónico:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <button type="submit">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
