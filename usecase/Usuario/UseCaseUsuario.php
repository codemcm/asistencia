<?php
include_once __DIR__ . "/IUsuarioGateway.php"; 
include_once __DIR__ . "/../../Dto/RespuestaGenerica.php";
class UseCaseUsuario{
    private $usuarioGateway;
    public function __construct(IUsuarioGateway $usuarioGateway)
    {
        $this->usuarioGateway = $usuarioGateway;
    }

    public function listarUsuarios(): RespuestaGenerica{
        $respuesta = new RespuestaGenerica();
        try{
            $listaUsuarios = $this->usuarioGateway->listarUsuarios();
            $respuesta->status = "ok";
            $respuesta->body = $listaUsuarios;
            $respuesta->message = "Lista de usuarios";
        }catch(Exception $e){
            $respuesta->status = "error";
            $respuesta->body = $e->getMessage();
        }
        return $respuesta;
    }

}