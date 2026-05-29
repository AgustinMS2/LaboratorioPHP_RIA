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
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getEtiqueta(): string {
        return $this->etiqueta;
    }
    public function setEtiqueta(string $etiqueta): void {
        $this->etiqueta = $etiqueta;
    }

    public function getTipo(): TipoCampo {
        return $this->tipo;
    }
    public function setTipo(TipoCampo $tipo): void {
        $this->tipo = $tipo;
    }

    public function getValor(): string {
        return $this->valor;
    }
    public function setValor(string $valor): void {
        $this->valor = $valor;
    }
}