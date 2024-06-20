<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect(
        "localhost",
        "root",
        "",
        "base_proyecto"
    ) or
        die("Problemas con la conexión");
    $registros = mysqli_query($conexion, "select NO_DOCUMENTO
from usuarios
where NO_DOCUMENTO=$_REQUEST[no_documento]") or
        die("Problemas en el select:" .
            mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "delete from usuarios
where NO_DOCUMENTO=$_REQUEST[no_documento]") or
            die("Problemas en el select:" .
                mysqli_error($conexion));
        echo "Se efectuó el borrado del usuario con el
numero documento digitado.";
    } else {
        echo "No existe un usuario con ese numero documento lo
siento intente con otro.";
    }
    mysqli_close($conexion);
    ?>
</body>

</html>