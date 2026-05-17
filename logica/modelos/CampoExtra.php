<?php

class CampoExtra {
    private int $id;
    private string $etiqueta;
    private string $valor;
    private TipoCampo $tipo;

    public function __construct(int $id, string $etiqueta, TipoCampo $tipo, string $valor) {
        $this->id = $id;
        $this->etiqueta = $etiqueta;
        $this->tipo = $tipo;
        $this->valor = $valor;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getEtiqueta(): string {
        return $this->etiqueta;
    }

    public function getTipo(): TipoCampo {
        return $this->tipo;
    }

    public function getValor(): string {
        return $this->valor;
    }
}