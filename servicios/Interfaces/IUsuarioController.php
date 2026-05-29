<?php
interface IUsuarioController {
    public function altaUsuario(DTUsuario $dtu): void;
    public function bajaUsuario(int $id): void;
    public function modificarUsuario(DTUsuario $dtu): void;
    public function listarUsuarios(): array;
    public function moderarUsuario(): void;
    public function iniciarSesion(DTUsuario $dtu): DTSesion;
    public function cerrarSesion(DTSesion $dts): void;
}
?>