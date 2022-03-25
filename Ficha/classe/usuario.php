<?php
class Usuario {
    private $nome;
    private $senha;
    private $pers;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function getPers(){
        return $this->pers;
    }
    public function setPers($pers){
        $this->pers = $pers;
    }
}
