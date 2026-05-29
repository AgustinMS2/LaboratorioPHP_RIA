<?php
include __DIR__ . "/../../servicios/Fabrica.php";

class PublicacionEndpoint {
    private IPublicacionController $controlador;

    public function __construct() {
        $this->controlador = Fabrica::getInstance()->getIPublicacionController();
    }


}

?>