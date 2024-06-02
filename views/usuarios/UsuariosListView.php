<?php
include_once __DIR__ . "/../../usecase/Usuario/UsuarioController.php";

$controlUsuario= new UsuarioController();

$response = $controlUsuario->listarUsuarios();
$listaUsuarios = $response->body;

foreach($listaUsuarios as $usuario){
    echo $usuario['NickName']."<br>";
}
