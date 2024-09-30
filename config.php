<?php
/*
//Conexión para el contenedor
$servername = "database"; // Cambiar a 'database' que es el nombre del servicio
$username = "crudlite";    // Nombre de usuario definido en docker-compose
$password = "crudlite";    // Contraseña definida en docker-compose
$dbname = "crudlitesystem"; // Nombre de la base de datos definido en docker-compose
*/

$servername = "localhost"; // Cambiar a 'database' que es el nombre del servicio
$username = "root";    // Nombre de usuario definido en docker-compose
$password = "root";    // Contraseña definida en docker-compose
$dbname = "crudlitesystem"; // Nombre de la base de datos definido en docker-compose

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
