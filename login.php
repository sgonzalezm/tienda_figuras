<?php
include "conexion.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php


//Obtener los datos del formulario
if (isset($_POST["login_correo"]) && isset($_POST["login_password"])) {
    // Check if the username and password POST parameters are not empty
    if (!empty($_POST["login_correo"]) && !empty($_POST["login_password"])) {

        $correo = $_POST["login_correo"];
        $password = $_POST["login_password"];
    }else{
        echo "Es necesario ingresar datos validos";
    }
}else{
    echo "No se ingresaron datos en el formulario";
}

echo "$correo";
//Consulta para obtener los datos de login

$stmt = $pdo->prepare("SELECT * FROM clientes WHERE correo = :correo AND password = :password");
$stmt->bindParam(":correo", $correo, PDO::PARAM_STR);
$stmt->bindParam(":password", $password, PDO::PARAM_STR);
$stmt->execute();
if ($stmt->rowCount() > 0) {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $pdo = null;
    foreach ($result as $row) {
        echo $row["correo"];
    }
}else{
    echo "El usuario o contraseña no existe en el sistema";
}


//Validacion si el acceso es correcto


//Variables para identificadores de la sesion
$_SESSION["correo"] = $_REQUEST["login_correo"];
$_SESSION["nombre"] = $_REQUEST["login_password"];




?>
    
</body>
</html>