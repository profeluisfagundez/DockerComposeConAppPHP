<?php
require_once 'config.php';

class Usuario {
    public function getAllUsuarios() {
        global $conn;

        $sql = "SELECT * FROM usuario";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function eliminarUsuario($ci) {
        global $conn;

        $sql = "DELETE FROM usuario WHERE ci = :ci";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':ci', $ci, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function agregarUsuario($ci, $nombre, $apellido) {
        global $conn;

        $sql = "INSERT INTO usuario (ci, nombre, apellido) VALUES (:ci, :nombre, :apellido)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':ci', $ci, PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $stmt->execute();
    }
}
