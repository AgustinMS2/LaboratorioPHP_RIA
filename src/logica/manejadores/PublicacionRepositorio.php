<?php
include __DIR__ . "/../../persistencia/Conectar.php";

class PublicacionRepositorio {
    private static ?PublicacionRepositorio $instancia = null;
    private mysqli $mysql;

    private function __construct() {
        $this->mysql = new Conectar();
    }

    public static function getInstance(): PublicacionRepositorio {
        if (self::$instancia === null) {
            self::$instancia = new PublicacionRepositorio();
        }
        return self::$instancia;
    }
    
}
?>