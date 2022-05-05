<?php
class Usuario {
    // private $id;
    // private $senha;
    private $pers;
    // public function getId(){return $this->id;}
    // public function setId($id){$this->id = $id;}
    // public function getSenha(){return $this->senha;}
    // public function setSenha($senha){$this->senha = $senha;}
    public function getPers(){return $this->pers;}
    public function setPers($pers){$this->pers = $pers;}
    public function __construct(){
        if (isset($_GET['q'])&&$_GET['q'] == 'send') {
            $this->request();
        } else {
            $this->login();
        }
    }
    function clean($c){
        $c = trim($c);
        $c = stripslashes($c);
        $c = htmlspecialchars($c);
        return $c;
    }
    function listaPers(){
        foreach ($this->getPers() as $key) {
            echo "<div class='Char Flex Centro Col'>
                <i class='fa-solid fa-user'></i>
                <span class='Name'>$key</span>
                <a href='Mesa/index.php?char=$key'>
                    <button type='button' name='button'>Entrar</button>
                </a>
            </div>";
        }
    }
    function login(){
        $bancoR = fopen('../db/banco.json','r') or die('erro ao logar, fala com o Leo');
        $bancoR = fread($bancoR, filesize('../db/banco.json'));
        $bancoR = json_decode($bancoR, true);
        foreach ($bancoR as $num => $id) {
            if ($this->clean($_POST['Id']) == $num && $id['chv']==$_POST['Pass']) {
                $_SESSION['Login']='ok';
                $this->setPers($id['pers']);
                return $_SESSION['Logado']=$num;
            }
            else {
                unset($_SESSION['Logado']);
                return $_SESSION['Login']='erro';
            }
        }
        unset($bancoR);
    }
    function request(){
        if (!isset($_POST['id'])&&!isset($_POST['p1'])&&!isset($_POST['p2'])) {
            return "Usuario não solicitado. Preecha todos os campos";
        }
        if ($this->clean($_POST['p1'])!=$this->clean($_POST['p2'])) {
            return "Senhas diferentes!";
        }
        $dados = "'".$this->clean($_POST['id'])."':{'chv':'".$this->clean($_POST['p1'])."','pers':[]}
";
        $bancoW = fopen('../db/pendente.json','a') or die('erro ao cadastrar solicitação de usuario');
        fwrite($bancoW,$dados);
        unset($dados, $bancoW);
    }
}
