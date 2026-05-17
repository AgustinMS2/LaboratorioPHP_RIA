<?php

class Moderador extends Usuario {
    protected int $cantidadQuejas;
    protected array $publicacionesRevisadas;
    protected array $quejas;

    public function __construct(int $id, string $nombre, string $email, string $passwordHash, bool $activo, DateTime $fechaRegistro, int $cantidadQuejas = 0, array $publicacionesRevisadas = [], array $quejas = []) {
        parent::__construct($id, $nombre, $email, $passwordHash, $activo, $fechaRegistro);
        $this->cantidadQuejas = $cantidadQuejas;
        $this->publicacionesRevisadas = $publicacionesRevisadas;
        $this->quejas = $quejas;
    }

    public function getCantidadQuejas(): int {
        return $this->cantidadQuejas;
    }

    public function getPublicacionesRevisadas(): array {
        return $this->publicacionesRevisadas;
    }

    public function getQuejas(): array {
        return $this->quejas;
    }
}
?>