<?php

abstract class Publicacion {
    protected int $id;
    protected string $titulo;
    protected string $foto;
    protected string $nombreCientifico;
    protected array $areasHabitat;
    protected string $dieta;
    protected string $horasActivas;
    protected EstadoPublicacion $estado;
    protected DateTime $fechaCreacion;
    protected DateTime $fechaUltimaModificacion;
    protected Usuario $autor;
    protected array $camposExtra;
    protected Seccion $seccion;
    protected array $moderaciones;
    protected array $reportes;

    public function __construct(int $id, string $titulo, string $foto, string $nombreCientifico, array $areasHabitat, string $dieta, string $horasActivas, EstadoPublicacion $estado, DateTime $fechaCreacion, Usuario $autor, array $camposExtra) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->foto = $foto;
        $this->nombreCientifico = $nombreCientifico;
        $this->areasHabitat = $areasHabitat;
        $this->dieta = $dieta;
        $this->horasActivas = $horasActivas;
        $this->fechaCreacion = $fechaCreacion;
        $this->fechaUltimaModificacion = $fechaUltimaModificacion;
        $this->estado = $estado;
        $this->autor = $autor;
        $this->camposExtra = $camposExtra;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getFoto(): string {
        return $this->foto;
    }

    public function getNombreCientifico(): string {
        return $this->nombreCientifico;
    }

    public function getAreasHabitat(): array {
        return $this->areasHabitat;
    }

    public function getDieta(): string {
        return $this->dieta;
    }

    public function getHorasActivas(): string {
        return $this->horasActivas;
    }

    public function getEstado(): EstadoPublicacion {
        return $this->estado;
    }

    public function getFechaCreacion(): DateTime {
        return $this->fechaCreacion;
    }

    public function getFechaUltimaModificacion(): DateTime {
        return $this->fechaUltimaModificacion;
    }

    public function getAutor(): Usuario {
        return $this->autor;
    }

    public function getCamposExtra(): array {
        return $this->camposExtra;
    }

}
?>