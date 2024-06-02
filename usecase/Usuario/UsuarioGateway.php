<?php
include_once __DIR__ . "/../DataAccess/MysqlConnector.php";
include_once __DIR__ . "/IUsuarioGateway.php";
class UsuarioGateway implements IUsuarioGateway{

    public function listarUsuarios(): array
    {
        $mysqlConnector = new MysqlConnector();
        $sql = "SELECT * FROM Usuario";
        $result = $mysqlConnector->consultaRetorno($sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}