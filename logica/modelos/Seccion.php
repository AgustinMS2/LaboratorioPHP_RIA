<?php

class Seccion{
    private int $id;
    private string $nombre;
    private string $descripcion;
    private array $publicaciones;

    public function __construct(int $id, string $nombre, string $descripcion, array $publicaciones = []) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->publicaciones = $publicaciones;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getDescripcion(): string {
        return $this->descripcion;
    }

    public function getPublicaciones(): array {
        return $this->publicaciones;
    }
}

?>