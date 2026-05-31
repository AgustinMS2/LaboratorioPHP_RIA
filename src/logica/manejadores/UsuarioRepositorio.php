<?php
include_once __DIR__ . "/../../persistencia/Conectar.php";

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

    public function agregarUsuario(Usuario $usuario): void {
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

    public function obtenerUsuarioPorEmail(string $email): ?Usuario {
        $sql = "SELECT * FROM USUARIO WHERE email = ?";
        $consulta = $this->mysql->prepare($sql);
        $consulta->bind_param("s", $email);
        $consulta->execute();

        $resultado = $consulta->get_result();
        $fila = $resultado->fetch_assoc();

        if ($fila) {
            return new Usuario(
                $fila["id_usuario"],
                $fila["nombre"],
                $fila["apellido"],
                $fila["email"],
                $fila["password_hash"],
                $fila["activo"],
                new DateTime($fila["fecha_registro"]),
                [],
                []
            );
        }

        return null;
    }

    public function obtenerSiguienteId(): int {
        $sql = "SELECT COALESCE(MAX(id_usuario), 0) + 1 AS proximo_id FROM USUARIO";
        $resultado = $this->mysql->query($sql);
        $fila = $resultado->fetch_assoc();
        return $fila["proximo_id"];
    }

    public function listarUsuarios(): array {
        $sql = "SELECT * FROM USUARIO";
        $resultado = $this->mysql->query($sql);

        $usuarios = [];
        foreach ($resultado as $fila) {
            $usuarios[] = new Usuario(
                $fila["id_usuario"],
                $fila["nombre"],
                $fila["apellido"],
                $fila["email"],
                $fila["password_hash"],
                $fila["activo"],
                new DateTime($fila["fecha_registro"]),
                [],
                []
            );
        }
        return $usuarios;
    }


}
?>