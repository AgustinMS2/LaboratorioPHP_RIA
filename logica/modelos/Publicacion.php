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

    public function __construct(int $id, string $titulo, string $foto, string $nombreCientifico, array $areasHabitat, string $dieta, string $horasActivas, EstadoPublicacion $estado, DateTime $fechaCreacion, DateTime $fechaUltimaModificacion, Usuario $autor, array $camposExtra, Seccion $seccion) {
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
        $this->moderaciones = [];
        $this->reportes = [];
        $this->seccion = $seccion;
    }

    public function getId(): int {
        return $this->id;
    }
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }
    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function getFoto(): string {
        return $this->foto;
    }
    public function setFoto(string $foto): void {
        $this->foto = $foto;
    }

    public function getNombreCientifico(): string {
        return $this->nombreCientifico;
    }
    public function setNombreCientifico(string $nombreCientifico): void {
        $this->nombreCientifico = $nombreCientifico;
    }

    public function getAreasHabitat(): array {
        return $this->areasHabitat;
    }
    public function setAreasHabitat(array $areasHabitat): void {
        $this->areasHabitat = $areasHabitat;
    }

    public function getDieta(): string {
        return $this->dieta;
    }
    public function setDieta(string $dieta): void {
        $this->dieta = $dieta;
    }

    public function getHorasActivas(): string {
        return $this->horasActivas;
    }
    public function setHorasActivas(string $horasActivas): void {
        $this->horasActivas = $horasActivas;
    }

    public function getEstado(): EstadoPublicacion {
        return $this->estado;
    }
    public function setEstado(EstadoPublicacion $estado): void {
        $this->estado = $estado;
    }

    public function getFechaCreacion(): DateTime {
        return $this->fechaCreacion;
    }
    public function setFechaCreacion(DateTime $fechaCreacion): void {
        $this->fechaCreacion = $fechaCreacion;
    }

    public function getFechaUltimaModificacion(): DateTime {
        return $this->fechaUltimaModificacion;
    }
    public function setFechaUltimaModificacion(DateTime $fechaUltimaModificacion): void {
        $this->fechaUltimaModificacion = $fechaUltimaModificacion;
    }

    public function getAutor(): Usuario {
        return $this->autor;
    }
    public function setAutor(Usuario $autor): void {
        $this->autor = $autor;
    }

    public function getCamposExtra(): array {
        return $this->camposExtra;
    }
    public function setCamposExtra(array $camposExtra): void {
        $this->camposExtra = $camposExtra;
    }

    public function getSeccion(): Seccion {
        return $this->seccion;
    }
    public function setSeccion(Seccion $seccion): void {
        $this->seccion = $seccion;
    }

    public function getModeraciones(): array {
        return $this->moderaciones;
    }
    public function setModeraciones(array $moderaciones): void {
        $this->moderaciones = $moderaciones;
    }

    public function getReportes(): array {
        return $this->reportes;
    }
    public function setReportes(array $reportes): void {
        $this->reportes = $reportes;
    }

}
?>