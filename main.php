<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bienvenido a nuestra pagina</h1>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    $user = $_POST['user'];
    $password = $_POST['password'];
    $connection = mysqli_connect("localhost", "root", "", "Login");
    $consulta = "select count(*) as registros from Usuarios where NombreUsuario = '$user' and Contraseña = '$password'";
    $result = mysqli_query($connection, $consulta);
    $row = mysqli_fetch_array($result);

    
    if(intval($row["registros"]) == 1){
        $consulta = "select Nombre, apellido from Usuarios where NombreUsuario = '$user' and contraseña = '$password'";
        $result = mysqli_query($connection, $consulta);
        $row = mysqli_fetch_array($result);
        $nombre = $row['Nombre'];
        $apellido = $row['apellido'];
        echo "<h1>Hola $nombre $apellido!</h1>";
        
    }
    else{
        echo "Usuario no encontrado";
        echo "<a href=registro.html>Crear cuenta</a>";
        echo "En 5 segundos se le rediccionara a la pagina de registro";
        sleep(5);
        header("Location: http://localhost/login/registro.html");
        exit();
    }
?>
</body>
</html>