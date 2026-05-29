<?php
include __DIR__ . "/../../servicios/Interfaces/IPropuestaController.php";
include __DIR__ . "/../../logica/manejadores/PropuestaRepositorio.php";

class PropuestaController implements IPropuestaController {

    public function __construct() {}

    public function altaPropuesta(DTPropuesta $dtp): void {
        $repositorio = PropuestaRepositorio::getInstance();
        
    }

    public function bajaPropuesta(int $id): void{
        $repositorio = PropuestaRepositorio::getInstance();

    }

    public function modificarPropuesta(DTPropuesta $dtp): void{
        $repositorio = PropuestaRepositorio::getInstance();

    }

    public function listarPropuestas(): array{
        $repositorio = PropuestaRepositorio::getInstance();

    }

    public function moderarPropuesta(): void{
        $repositorio = PropuestaRepositorio::getInstance();

    }

    public function reportarPublicacion(DTReporte $dtr): void{
        $repositorio = PropuestaRepositorio::getInstance();

    }


}
?>