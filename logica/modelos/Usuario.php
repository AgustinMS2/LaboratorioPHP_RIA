<?php

class Usuario {
    protected int $id;
    protected string $nombre;
    protected string $apellido;
    protected string $email;
    protected string $passwordHash;
    protected bool $activo;
    protected DateTime $fechaRegistro;
    protected Sesion $sesion;
    protected array $reportes;
    protected array $publicaciones;

    public function __construct(int $id, string $nombre, string $email, string $passwordHash, bool $activo, DateTime $fechaRegistro) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->passwordHash = $passwordHash;
        $this->activo = $activo;
        $this->fechaRegistro = $fechaRegistro;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getPasswordHash(): string {
        return $this->passwordHash;
    }

    public function getActivo(): bool {
        return $this->activo;
    }

    public function getFechaRegistro(): DateTime {
        return $this->fechaRegistro;
    }

    public function getSesion(): Sesion {
        return $this->sesion;
    }

    public function getReportes(): array {
        return $this->reportes;
    }

    public function getPublicaciones(): array {
        return $this->publicaciones;
    }

}  
?>