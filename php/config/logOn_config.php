<?php

include './conexion_bd.php';

$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

$usuario_ya_existente = "SELECT 1 FROM usuarios WHERE nombre = '$nombre' AND clave = '$clave'";
$query_usuario_existente = mysqli_query($conexion,$usuario_ya_existente);

if (mysqli_num_rows($query_usuario_existente)) {
    echo '
    <script>
    alert("¡Bienvenido!");
    window.location = "../../index.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert("Usuario o contraseña incorrectos");
    window.location = "../logOn.php";
    </script>
    ';
}

mysqli_close($conexion);
// Sa3wk54YqfHS

?>