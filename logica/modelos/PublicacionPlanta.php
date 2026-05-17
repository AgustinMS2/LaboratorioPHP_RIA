<?php

class PublicacionPlanta extends Publicacion {
    private string $reino="Plantae";
    private string $familia;
    private string $usosMedicinales;

    public function __construct(int $id, string $titulo, string $descripcion, DateTime $fechaCreacion, EstadoPublicacion $estado, int $autorId, string $familia, string $usosMedicinales) {
        parent::__construct($id, $titulo, $descripcion, $fechaCreacion, $estado, $autorId);
        $this->familia = $familia;
        $this->usosMedicinales = $usosMedicinales;
    }

    public function getFamilia(): string {
        return $this->familia;
    }

    public function getUsosMedicinales(): string {
        return $this->usosMedicinales;
    }

}
?>