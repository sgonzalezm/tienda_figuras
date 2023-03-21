<?php
// Define the database connection details
$host = 'localhost';
$dbname = 'venta_figuras';
$username = 'root';
$password = '';

// Create a PDO object
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion exitosa";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

/*
$servername = "localhost";
$database = "venta_figuras";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
*/
    ?>