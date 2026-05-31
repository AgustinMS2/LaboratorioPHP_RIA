<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

include __DIR__ . "/logica/endpoints/UsuarioEndpoint.php";
include __DIR__ . "/logica/endpoints/PublicacionEndpoint.php";

include __DIR__ . "/logica/modelos/Usuario.php";

include __DIR__ . "/servicios/DTs/DTUsuario.php";

$metodo = $_SERVER['REQUEST_METHOD'];
$ruta = $_SERVER['PATH_INFO'] ?? '';

$usuarioEndpoint = new UsuarioEndpoint();
$publicacionEndpoint = new PublicacionEndpoint();

match([$metodo, $ruta]) {
    ['POST', '/usuarios/altaUsuario'] => $usuarioEndpoint->altaUsuario(),
    ['DELETE','/usuarios/bajaUsuario'] => $usuarioEndpoint->bajaUsuario((int)$_GET['id']),
    ['PUT',  '/usuarios/modificarUsuario'] => $usuarioEndpoint->modificarUsuario(),
    ['GET',  '/usuarios/listarUsuarios'] => $usuarioEndpoint->listarUsuarios(),
    ['POST', '/usuarios/iniciarSesion'] => $usuarioEndpoint->iniciarSesion(),
    ['POST', '/usuarios/cerrarSesion'] => $usuarioEndpoint->cerrarSesion(),

    default => http_response_code(404)
};
?>