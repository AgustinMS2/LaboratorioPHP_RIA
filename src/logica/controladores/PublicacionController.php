<?php
include_once __DIR__ . "/../../servicios/Interfaces/IPublicacionController.php";
include_once __DIR__ . "/../../logica/manejadores/PublicacionRepositorio.php";

class PublicacionController implements IPublicacionController {

    public function __construct() {}

    public function altaPublicacion(DTPublicacion $dtp): void {
        $repositorio = PublicacionRepositorio::getInstance();
        
    }

    public function bajaPublicacion(int $id): void{
        $repositorio = PublicacionRepositorio::getInstance();

    }

    public function modificarPublicacion(DTPublicacion $dtp): void{
        $repositorio = PublicacionRepositorio::getInstance();

    }

    public function listarPublicaciones(): array{
        $repositorio = PublicacionRepositorio::getInstance();

    }

    public function moderarPublicacion(): void{
        $repositorio = PublicacionRepositorio::getInstance();

    }

    public function reportarPublicacion(DTReporte $dtr): void{
        $repositorio = PublicacionRepositorio::getInstance();

    }


}
?>