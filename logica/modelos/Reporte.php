<?php

class Reporte {
    private int $id;
    private string $motivo;
    private DateTime $fecha;
    private bool $resuelto;
    private Publicacion $publicacion;
    private Usuario $reportador;

    public function __construct(int $id, Publicacion $publicacion, Usuario $reportador, string $motivo, DateTime $fecha, bool $resuelto = false) {
        $this->id = $id;
        $this->publicacion = $publicacion;
        $this->reportador = $reportador;
        $this->motivo = $motivo;
        $this->fecha = $fecha;
        $this->resuelto = $resuelto;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getPublicacion(): Publicacion {
        return $this->publicacion;
    }

    public function getReportador(): Usuario {
        return $this->reportador;
    }

    public function getMotivo(): string {
        return $this->motivo;
    }

    public function getFecha(): DateTime {
        return $this->fecha;
    }

    public function getResuelto(): bool {
        return $this->resuelto;
    }
}
?>