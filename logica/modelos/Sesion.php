<?php

class Sesion {
    private int $id;
    private string $token;
    private DateTime $fechaInicio;
    private DateTime $fechaFin;
    private bool $activa;
    private Usuario $usuario;

    public function __construct(Usuario $usuario, string $token, bool $activa = true) {
        $this->usuario = $usuario;
        $this->token = $token;
        $this->fechaInicio = new DateTime();
        $this->activa = $activa;
    }

    public function getUsuario(): Usuario {
        return $this->usuario;
    }

    public function getToken(): string {
        return $this->token;
    }

    public function getFechaInicio(): DateTime {
        return $this->fechaInicio;
    }

    public function getActiva(): bool {
        return $this->activa;
    }
}
?>