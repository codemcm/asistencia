<?php 
require_once __DIR__ . "./UsuarioGateway.php";
require_once __DIR__ . "./UseCaseUsuario.php";
class UsuarioController{

    public function listarUsuarios(){
        $gatewayUsuario = new UsuarioGateway();
        $usuarioUseCase = new UseCaseUsuario($gatewayUsuario);
        $response = $usuarioUseCase->listarUsuarios();
        return $response;
    }
}

$controllerObj = new UsuarioController();
$respuesta = $controllerObj->listarUsuarios();

echo $respuesta->status;