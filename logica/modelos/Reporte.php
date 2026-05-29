<?php

class Reporte {
    private int $id;
    private string $motivo;
    private DateTime $fecha;
    private bool $resuelto;
    private Publicacion $publicacion;
    private Usuario $reportador;

    public function __construct(int $id, Publicacion $publicacion, Usuario $reportador, string $motivo, DateTime $fecha, bool $resuelto) {
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
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getPublicacion(): Publicacion {
        return $this->publicacion;
    }
    public function setPublicacion(Publicacion $publicacion): void {
        $this->publicacion = $publicacion;
    }

    public function getReportador(): Usuario {
        return $this->reportador;
    }
    public function setReportador(Usuario $reportador): void {
        $this->reportador = $reportador;
    }

    public function getMotivo(): string {
        return $this->motivo;
    }
    public function setMotivo(string $motivo): void {
        $this->motivo = $motivo;
    }

    public function getFecha(): DateTime {
        return $this->fecha;
    }
    public function setFecha(DateTime $fecha): void {
        $this->fecha = $fecha;
    }

    public function getResuelto(): bool {
        return $this->resuelto;
    }
    public function setResuelto(bool $resuelto): void {
        $this->resuelto = $resuelto;
    }
}
?>