<?php
require_once 'config.php';

class Usuario {
    public function getAllUsuarios() {
        global $conn;
        $sql = "SELECT * FROM usuario";
        $result = $conn->query($sql);

        $usuarios = [];
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }

        return $usuarios;
    }

    public function eliminarUsuario($ci) {
        global $conn;
        $sql = "DELETE FROM usuario WHERE ci = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $ci);
        $stmt->execute();
        $stmt->close();
    }

    public function agregarUsuario($ci, $nombre, $apellido) {
        global $conn;
        $sql = "INSERT INTO usuario (ci, nombre, apellido) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $ci, $nombre, $apellido);
        $stmt->execute();
        $stmt->close();
    }
}