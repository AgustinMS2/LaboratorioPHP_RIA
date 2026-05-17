<?php

class PublicacionAnimal extends Publicacion {
    private string $reino="Animalia";
    private string $clase;
    private string $orden;

    public function __construct(int $id, string $titulo, string $descripcion, DateTime $fechaPublicacion, EstadoPublicacion $estado, Seccion $seccion, string $clase, string $orden) {
        parent::__construct($id, $titulo, $descripcion, $fechaPublicacion, $estado, $seccion);
        $this->clase = $clase;
        $this->orden = $orden;
    }

    public function getClase(): string {
        return $this->clase;
    }

    public function getOrden(): string {
        return $this->orden;
    }

}
?>