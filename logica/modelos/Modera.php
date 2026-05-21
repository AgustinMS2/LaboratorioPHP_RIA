<?php

class Modera {
    private int $id;
    private string $motivoRechazo;
    private ResultadoRevision $resultado;
    private DateTime $fechaRevision;
    private Moderador $moderador;
    private Publicacion $publicacion;

    public function __construct(int $id, string $motivoRechazo, ResultadoRevision $resultado, Moderador $moderador, Publicacion $publicacion) {
        $this->id = $id;
        $this->motivoRechazo = $motivoRechazo;
        $this->resultado = $resultado;
        $this->moderador = $moderador;
        $this->publicacion = $publicacion;
        $this->fechaRevision = new DateTime();
    }

    private function getId(): int {
        return $this->id;
    }

    private function getMotivoRechazo(): string {
        return $this->motivoRechazo;
    }

    public function getPublicacion(): Publicacion {
        return $this->publicacion;
    }

    public function getModerador(): Moderador {
        return $this->moderador;
    }

    public function getResultado(): ResultadoRevision {
        return $this->resultado;
    }

    public function getFechaRevision(): DateTime {
        return $this->fechaRevision;
    }
}
?>