<?php
interface IPublicacionController {
    public function altaPublicacion(DTPublicacion $dtp): void;
    public function bajaPublicacion(int $id): void;
    public function modificarPublicacion(DTPublicacion $dtp): void;
    public function listarPublicaciones(): array;
    public function moderarPublicacion(): void;
    public function reportarPublicacion(DTReporte $dtr): void;
}
?>