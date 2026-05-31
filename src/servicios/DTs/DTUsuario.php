<?php

class DTUsuario {
    private ?int $id;
    private ?string $nombre;
    private ?string $apellido;
    private ?string $email;
    private ?string $password;
    private ?bool $activo;
    private ?string $fechaRegistro;

    public function __construct(?int $id, ?string $nombre, ?string $apellido, ?string $email, ?string $password, ?bool $activo, ?string $fechaRegistro) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->password = $password;
        $this->activo = $activo;
        $this->fechaRegistro = $fechaRegistro;
    }

    public function getId(): ?int {
        return $this->id;
    }
    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function getNombre(): ?string {
        return $this->nombre;
    }
    public function setNombre(?string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getApellido(): ?string {
        return $this->apellido;
    }
    public function setApellido(?string $apellido): void {
        $this->apellido = $apellido;
    }

    public function getEmail(): ?string {
        return $this->email;
    }
    public function setEmail(?string $email): void {
        $this->email = $email;
    }

    public function getPassword(): ?string {
        return $this->password;
    }
    public function setPassword(?string $password): void {
        $this->password = $password;
    }

    public function getActivo(): ?bool {
        return $this->activo;
    }
    public function setActivo(?bool $activo): void {
        $this->activo = $activo;
    }

    public function getFechaRegistro(): ?string {
        return $this->fechaRegistro;
    }
    public function setFechaRegistro(?string $fechaRegistro): void {
        $this->fechaRegistro = $fechaRegistro;
    }

}
?>