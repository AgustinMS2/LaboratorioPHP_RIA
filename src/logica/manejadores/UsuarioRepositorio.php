<?php
include __DIR__ . "/../../persistencia/Conectar.php";

class UsuarioRepositorio {
    private static ?UsuarioRepositorio $instancia = null;
    private mysqli $mysql;

    private function __construct() {
        $this->mysql = new Conectar();
    }

    public static function getInstance(): UsuarioRepositorio {
        if (self::$instancia === null) {
            self::$instancia = new UsuarioRepositorio();
        }
        return self::$instancia;
    }

    public function agregar(Usuario $usuario): void {
        $sql = "INSERT INTO USUARIO (id_usuario, nombre, apellido, email, password_hash, rol, activo, fecha_registro) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $consulta = $this->mysql->prepare($sql);

        $id = $usuario->getId();
        $nombre = $usuario->getNombre();
        $apellido = $usuario->getApellido();
        $email = $usuario->getEmail();
        $passwordHash = $usuario->getPasswordHash();
        $rol = "USUARIO";
        $activo = $usuario->getActivo();
        $fechaRegistro = $usuario->getFechaRegistro()->format("Y-m-d H:i:s");

        $consulta->bind_param("isssssss", $id, $nombre, $apellido, $email, $passwordHash, $rol, $activo, $fechaRegistro);
        $consulta->execute();
    }

}
?>