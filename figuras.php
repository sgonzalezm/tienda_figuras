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
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>

<?php
//$correo = 0;

if(isset($_SESSION["correo"])){
    $correo = $_SESSION["correo"];
}else {echo("Ingresar<br>");}

echo("el correo de la sesion es : $correo ");

//COnsulta de los productos disponibles
$stmt = $pdo->prepare("SELECT * FROM productos");
$stmt->execute();
if ($stmt->rowCount() > 0) {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $pdo = null;
    echo "<div class='slider'>"; // Definicion del slider de articulos
    foreach ($result as $row) {
        $articulo = $row["nombre"]; // Variable temporal por articulo
        $descripcion = $row["descripcion"];
        $precio = $row["precio"];
        $imagen = $row["img_principal"];
        echo "<div class='card'>";
        echo "<img src='$imagen'>";
        echo "<h3>$articulo</h3>";
        echo "<p>$descripcion</p>";
        echo "<h3>MXP $ - $precio</h3>";
        echo "</div>";        
    }
    echo "</div>";
}else{
    echo "No hay articulos para mostrar";
}

?>

<div>
    <a href="cerrar_sesion.php"><button>Cerrar Sesion</button></a>
</div>
    
</body>
</html>