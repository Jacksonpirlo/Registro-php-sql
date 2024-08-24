<?php

include './conexion_bd.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

$query = "INSERT INTO usuarios(nombre,correo,clave)
          VALUES ('$nombre','$correo','$clave')
";

$usuarioExistente = "SELECT 1 FROM usuarios WHERE correo = '$correo'";
$consula_de_usuario_existente = mysqli_query($conexion,$usuarioExistente);

if (!empty($nombre) && !empty($correo) && !empty($clave)) {

    if (!filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico no es válido.";
        exit;

    } else {

        if (mysqli_num_rows($consula_de_usuario_existente) > 0) {
            echo '
            <script>
            alert("Este usuario ya existe")
            window.location = "../logIn.php";
            </script>
            ';
            exit;

        } else {
            
            echo '
            <script>
            alert("¡Registro exitoso!")
            window.location = "../logOn.php";
            </script>
            ';
        
            $registro_exitoso = mysqli_query($conexion,$query);
        }
    }

    
} else {
    echo '
        <script>
        alert("Por favor llene todos los campos")
        window.location = "../logIn.php";
        </script>
        ';
        exit;
}

mysqli_close($conexion);
?>