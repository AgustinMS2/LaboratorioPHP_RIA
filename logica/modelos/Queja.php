<?php

class Queja {
    private int $id;
    private string $descripcion;
    private DateTime $fecha;
    private bool $investigada;
    private Moderador $moderadorDenunciado;
    private Revision $revision;
    private Usuario $quejadoPor;

    public function __construct(int $id, string $descripcion, DateTime $fecha, bool $investigada=false, Moderador $moderadorDenunciado, Revision $revision, Usuario $quejadoPor) {
        $this->id = $id;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
        $this->investigada = $investigada;
        $this->moderadorDenunciado = $moderadorDenunciado;
        $this->revision = $revision;
        $this->quejadoPor = $quejadoPor;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getDescripcion(): string {
        return $this->descripcion;
    }

    public function getFecha(): DateTime {
        return $this->fecha;
    }

    public function getInvestigada(): bool {
        return $this->investigada;
    }

    public function getModeradorDenunciado(): Moderador {
        return $this->moderadorDenunciado;
    }

    public function getRevision(): Revision {
        return $this->revision;
    }

    public function getQuejadoPor(): Usuario {
        return $this->quejadoPor;
    }
}
?>