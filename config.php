<?php
// Conexión para el contenedor
$servername = "database"; // nombre del servicio definido en docker-compose
$username = "crudlite";   // usuario definido en docker-compose
$password = "crudlite";   // contraseña definida en docker-compose
$dbname = "crudlitesystem"; // nombre de la base de datos definido en docker-compose

/*
// Conexión para trabajar local
$servername = "localhost"; //nombre del servicio en XAMPP
$username = "root"; //Usuario que se usa en XAMPP
$password = "root"; //Si usan XAMPP esta parte va vacía
$dbname = "crudlitesystem"; //nombre de la base de datos
*/

try {
    // Crear conexión usando PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);

    // Establecer el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // (opcional) mensaje de éxito
    // echo "Conexión exitosa con PDO";
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
