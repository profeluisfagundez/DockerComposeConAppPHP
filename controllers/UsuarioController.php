<?php
require_once 'models/Usuario.php';

class UsuarioController {
    public function index() {
        $usuarioModel = new Usuario();
        $usuarios = $usuarioModel->getAllUsuarios();

        require_once 'views/index.php';
    }

    public function eliminar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ci = $_POST['ci'];

            $usuarioModel = new Usuario();
            $usuarioModel->eliminarUsuario($ci);

            header('Location: index.php');
        }
    }

    public function cargarUsuario() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ci = $_POST['ci'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];

            $usuarioModel = new Usuario();
            $usuarioModel->agregarUsuario($ci, $nombre, $apellido);

            header('Location: index.php');
        } else {
            require_once 'views/cargarUsuario.php';
        }
    }

    public function cargarUsuarioForm(){
        require_once 'views/cargarUsuario.php';
    }
}