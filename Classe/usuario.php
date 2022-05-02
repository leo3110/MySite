<?php
class Usuario {
    private $id;
    private $senha;
    private $pers;
    public function getId(){return $this->id;}
    public function setId($id){$this->id = $id;}
    public function getSenha(){return $this->senha;}
    public function setSenha($senha){$this->senha = $senha;}
    public function getPers(){return $this->pers;}
    public function setPers($pers){$this->pers = $pers;}
    public function __construct(){
        $bancoR = fopen('../db/banco.json','r') or die('erro ao logar, fala com o Leo');
        $bancoR = fread($bancoR, filesize('../db/banco.json'));
        $bancoR = json_decode($bancoR, true);
        foreach ($bancoR as $num => $id) {
            if (array_key_exists($this->clean($_POST['Id']),$id)) {
                echo "tem";
            }
            else {
                echo "não tem";
            }
            print_r($id);
        }
    }
    function clean($c){
        $c = trim($c);
        $c = stripslashes($c);
        $c = htmlspecialchars($c);
        return $c;
    }
}
