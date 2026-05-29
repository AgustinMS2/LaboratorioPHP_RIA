<?php
include __DIR__ . "/../../servicios/Interfaces/IUsuarioController.php";
include __DIR__ . "/../../logica/manejadores/UsuarioRepositorio.php";

class UsuarioController implements IUsuarioController {

    public function __construct() {}

    public function altaUsuario(DTUsuario $dtu): void {
        $repositorio = UsuarioRepositorio::getInstance();
        
    }

    public function bajaUsuario(int $id): void{
        $repositorio = UsuarioRepositorio::getInstance();

    }

    public function modificarUsuario(DTUsuario $dtu): void{
        $repositorio = UsuarioRepositorio::getInstance();

    }

    public function listarUsuarios(): array{
        $repositorio = UsuarioRepositorio::getInstance();

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