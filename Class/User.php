<?php
class User {
    // private $id;
    // private $senha;
    private $char;
    // public function getId(){return $this->id;}
    // public function setId($id){$this->id = $id;}
    // public function getSenha(){return $this->senha;}
    // public function setSenha($senha){$this->senha = $senha;}
    public function getChar(){return $this->char;}
    public function setChar($char){$this->char = $char;}
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
        $c = strtolower($c);
        return $c;
    }
    function listChar(){
        foreach ($this->getChar() as $key) {
            echo "<div class='Char Flex Centro Col'>
                <i class='fa-solid fa-user'></i>
                <span class='Name'>$key</span>
                <a href='Table/index.php?char=$key'>
                    <button type='button' name='button'>Entrar</button>
                </a>
            </div>";
        }
    }
    function login(){
        $bankR = fopen('../db/bank.json','r') or die('erro ao logar, fala com o Leo');
        $bankR = fread($bankR, filesize('../db/bank.json'));
        $bankR = json_decode($bankR, true);
        foreach ($bankR as $num => $id) {
            if ($this->clean($_POST['Id']) == $num && $id['key']==$_POST['Pass']) {
                $_SESSION['Login']='ok';
                $this->setChar($id['char']);
                return $_SESSION['Logado']=$num;
            }
            else {
                unset($_SESSION['Logado']);
                return $_SESSION['Login']='erro';
            }
        }
        unset($bankR);
    }
    function request(){
        if (!isset($_POST['id'])&&!isset($_POST['p1'])&&!isset($_POST['p2'])) {
            return "Usuario não solicitado. Preecha todos os campos";
        }
        if ($this->clean($_POST['p1'])!=$this->clean($_POST['p2'])) {
            return "Senhas diferentes!";
        }
        $dados = "'".$this->clean($_POST['id'])."':{'key':'".$this->clean($_POST['p1'])."','char':[]}
";
        $bancoW = fopen('../db/onHold.json','a') or die('erro ao cadastrar solicitação de usuario');
        fwrite($bancoW,$dados);
        unset($dados, $bancoW);
    }
}
