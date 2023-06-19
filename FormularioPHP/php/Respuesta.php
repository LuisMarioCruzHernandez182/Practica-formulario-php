<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta ....</title>
    <link rel="stylesheet" href="/FormularioPHP/css/Estilophp.css">
</head>
<body>
    <?php
    //definimos variables
    //rescatamos valores del formulario
        $nombre=$_POST['nombre'];
        $usuario=$_POST['usuario'];
        $pass=$_POST['password'];
        $pass2=$_POST['password2'];
        $correo=$_POST['correo'];
        $tel=$_POST['telefono'];
        $gen=$_POST['genero'];
        $fechanc=$_POST['fechan'];

    //verficaamos que las credenciales coincidan
        if($pass==$pass2){
            $respuesta="Correcto";
        }else{
            $respuesta="Incorrecto";
        }
    ?>
    
    <h1>Respuesta...</h1>
    <h2>Hola : <?php echo($usuario) ?> </h2>
    <h2>Tu logueo fue : <?= $respuesta ?> </h2>

    <table>
        <tr>
            <td>Campo</td>
            <td>Registro</td>
        </tr>
        <tr>
            <td>Nombre completo</td>
            <td><?php echo($nombre); ?></td>
        </tr>
        <tr>
            <td>Nombre de usuario</td>
            <td><?php echo($usuario); ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><?php echo($pass); ?></td>
        </tr>
        <tr>
            <td>Confirmar password</td>
            <td><?php echo($pass2); ?></td>
        </tr>
        <tr>
            <td>Correo</td>
            <td><?php echo($correo); ?></td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td><?php echo($tel); ?></td>
        </tr>
        <tr>
            <td>Genero</td>
            <td><?php echo($gen); ?></td>
        </tr>
        <tr>
            <td>Fecha de nacimiento</td>
            <td><?php echo($fechanc); ?></td>
        </tr>
    </table>
    <script src="../js/inicio.js"></script>
</body>
</html>