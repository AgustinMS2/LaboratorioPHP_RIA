<?php
include __DIR__ . "/../logica/controladores/UsuarioController.php";
include __DIR__ . "/../logica/controladores/PublicacionController.php";
include __DIR__ . "/../servicios/Interfaces/IUsuarioController.php";
include __DIR__ . "/../servicios/Interfaces/IPublicacionController.php";

class Fabrica {
    private static ?Fabrica $instancia = null;

    private function __construct() {
    }

    public static function getInstance(): Fabrica {
        if (self::$instancia === null) {
            self::$instancia = new Fabrica();
        }
        return self::$instancia;
    }

    public function getIUsuarioController(): IUsuarioController {
        return new UsuarioController();
    }

    public function getIPublicacionController(): IPublicacionController {
        return new PublicacionController();
    }
}
?>