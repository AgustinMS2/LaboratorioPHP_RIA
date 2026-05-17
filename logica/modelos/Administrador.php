<?php

class Administrador extends Moderador {

    public function __construct(int $id, string $nombre, string $email, string $passwordHash, bool $activo, DateTime $fechaRegistro) {
        parent::__construct($id, $nombre, $email, $passwordHash, $activo, $fechaRegistro);
    }

}
?>