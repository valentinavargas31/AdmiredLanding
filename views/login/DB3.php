<html>
<head>
<title>LISTADO</title>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost", "root", "" ,
"base_proyecto") or
die("Problemas con la conexión");
$registros = mysqli_query($conexion, "select nombre, apellido, usuario, tipo_documento, no_documento,
fecha_nacimiento, email, telefono, cargo, torre, apto
from usuario") or
die("Problemas en el select:" . mysqli_error($conexion));
while ($reg = mysqli_fetch_array($registros)) {
echo "NOMBRE:" . $reg['nombre'] . "<br>";
echo "APELLIDO:" . $reg['apellido'] . "<br>";
echo "USUARIO:" . $reg['usuario'] . "<br>";
echo "TIPO_DOCUMENTO:" . $reg['tipo_documento'] . "<br>";
echo "NO_DOCUMENTO:" . $reg['no_documento'] . "<br>";
echo "FECHA_NACIMEINTO:" . $reg['fecha_nacimiento'] . "<br>";
echo "EMAIL:" . $reg['email'] . "<br>";
echo "TELEFONO:" . $reg['telefono'] . "<br>";
echo "CARGO_ID:" . $reg['cargo_id'] . "<br>";
echo "TORRE:" . $reg['torre'] . "<br>";
echo "APTO:" . $reg['apto'] . "<br>";
switch ($reg['tipo_ducumento'])
{
case 1:
echo "C.C.";
break;
case 2:
echo "C.E.";
break;
case 3:
echo "NIT";
break;
}
echo "<br>";
echo "<hr>";
}
mysqli_close($conexion);
?>
</body>
</html>