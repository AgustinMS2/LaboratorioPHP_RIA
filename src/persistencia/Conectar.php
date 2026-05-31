<?php
include_once "ParametrosConexion.php";

class Conectar extends mysqli {
    public function __construct() {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        try {
            parent::__construct(SERVIDOR, USUARIO, CONTRASEÑA, BASEDATOS);
        } catch (mysqli_sql_exception $e) {
            die("Error al conectar: " . $e->getMessage());
        }
    }
}
?>