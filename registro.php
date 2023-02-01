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
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $user = $_POST['user'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $password = $_POST['password'];

    $connection = mysqli_connect("localhost", "root", "", "Login");
    $query = "insert into Usuarios(Nombre, Apellido, Contraseña, NombreUsuario) 
                values('$nombre', '$apellido', '$password', '$user')";
    if (mysqli_query($connection, $query)){
        echo "Usuario registrado :)";
    }
    else{
        echo "usuario no registrado";
    }
?>
</body>
</html>