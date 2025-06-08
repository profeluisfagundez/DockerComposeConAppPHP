<?php
require_once 'controllers/UsuarioController.php';

$usuarioController = new UsuarioController();

// Manejar la acción de cargar un usuario
if (isset($_POST['action']) && $_POST['action'] === 'eliminar') {
    $usuarioController->eliminar();
} elseif (isset($_POST['action']) && $_POST['action'] === 'cargar') {
    $usuarioController->cargarUsuario();
} else if (isset($_GET['action']) && $_GET['action'] === 'cargarUsuarioForm') {
    $usuarioController->cargarUsuarioForm();
} else {
    // Mostrar la lista de usuarios
    $usuarioController->index();
}
