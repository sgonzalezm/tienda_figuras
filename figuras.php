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
$correo = 0;

if(isset($_SESSION["correo"])){
    $correo = $_SESSION["correo"];
}else {echo("Ingresar<br>");}

echo("el correo de la sesion es : $correo ");

?>

<div>
    <a href="cerrar_sesion.php"><button>Cerrar Sesion</button></a>
</div>
    
</body>
</html>