<?php
include_once __DIR__ . "/../../servicios/Interfaces/IUsuarioController.php";
include_once __DIR__ . "/../../logica/manejadores/UsuarioRepositorio.php";

class UsuarioController implements IUsuarioController {

    public function __construct() {}

    public function altaUsuario(DTUsuario $dtu): void {
    $repositorio = UsuarioRepositorio::getInstance();

    $usuarioExistente = $repositorio->obtenerUsuarioPorEmail($dtu->getEmail());
    if ($usuarioExistente != null) {
        throw new Exception("Ya existe un usuario con ese email");
    }

    $id = $repositorio->obtenerSiguienteId();
    $passwordHash = password_hash($dtu->getPassword(), PASSWORD_DEFAULT);
    $fechaRegistro = new DateTime();

    $usuario = new Usuario(
        $id,
        $dtu->getNombre(),
        $dtu->getApellido(),
        $dtu->getEmail(),
        $passwordHash,
        true,
        $fechaRegistro,
        [],
        []
    );

    $repositorio->agregarUsuario($usuario);
}

    public function bajaUsuario(int $id): void{
        $repositorio = UsuarioRepositorio::getInstance();

    }

    public function modificarUsuario(DTUsuario $dtu): void{
        $repositorio = UsuarioRepositorio::getInstance();

    }

    public function listarUsuarios(): array {
    $repositorio = UsuarioRepositorio::getInstance();

    $usuarios = $repositorio->listarUsuarios();

    $resultado = [];
    foreach ($usuarios as $usuario) {
        $dtu = new DTUsuario(
            $usuario->getId(),
            $usuario->getNombre(),
            $usuario->getApellido(),
            $usuario->getEmail(),
            null,
            $usuario->getActivo(),
            $usuario->getFechaRegistro()->format("Y-m-d H:i:s")
        );
        $resultado[] = $dtu;
    }

    return $resultado;
}

    public function moderarUsuario(): void{
        $repositorio = UsuarioRepositorio::getInstance();

    }

    public function iniciarSesion(DTUsuario $dtu): DTSesion{
        $repositorio = UsuarioRepositorio::getInstance();

    }
    
    public function cerrarSesion(DTSesion $dts): void{
        $repositorio = UsuarioRepositorio::getInstance();

    }

}
?>