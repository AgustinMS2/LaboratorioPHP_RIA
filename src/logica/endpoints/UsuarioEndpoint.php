<?php
include __DIR__ . "/../../servicios/Fabrica.php";

class UsuarioEndpoint {
    private IUsuarioController $controlador;

    public function __construct() {
        $this->controlador = Fabrica::getInstance()->getIUsuarioController();
    }


}

?>