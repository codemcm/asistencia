<?php

class UsuarioIn{
    private $NickName;
    private $Password;

    public function get($atributo){
        return $this->$atributo;
    }

    public function set($atributo, $valor){
        $this->$atributo = $valor;
    }
}