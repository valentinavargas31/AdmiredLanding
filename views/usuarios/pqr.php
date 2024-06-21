<?php
// Conectar a la base de datos (ajusta los detalles según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "base_proyecto";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$tipo = $_POST['tipo'];
// No hay necesidad de recibir 'nombre', 'email', 'mensaje' si no existen en la tabla
// Se asume que estos datos no se están utilizando en la inserción a la tabla 'pqr'



// Preparar la consulta SQL para insertar datos
$sql = "INSERT INTO pqr (tipo,)
        VALUES ('$tipo')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
