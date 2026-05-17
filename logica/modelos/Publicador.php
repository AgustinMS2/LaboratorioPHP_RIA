<?php

class Publicador extends Usuario {
    protected array $publicaciones;

    public function __construct(int $id, string $nombre, string $email, string $passwordHash, bool $activo, DateTime $fechaRegistro, array $publicaciones = []) {
        parent::__construct($id, $nombre, $email, $passwordHash, $activo, $fechaRegistro);
        $this->publicaciones = $publicaciones;
    }

    public function getPublicaciones(): array {
        return $this->publicaciones;
    }
}

?>