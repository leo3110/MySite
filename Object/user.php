<?php
class User {
  private $idUsuario;
  private $senhaUsuario;

  function getId(){
    return $this->idUsuario;
  }
  function setId($idUsuario){
    $this->idUsuario = $idUsuario;
  }
  function getSenha(){
    return $this->idUsuario;
  }
  function setSenha($senhaUsuario){
    $this->senhaUsuario = $senhaUsuario;
  }
  function checkUser(){
    $server = "localhost";
  	$user = "root";
  	$pass = "";
  	try {
  		$login = $_POST["login_usuario"];
  		$senha = $_POST["senha_usuario"];
  		$conn = new PDO("mysql:host=$server;dbname=mydata",$user,$pass);
  		$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  		$stmt = $conn->prepare("Select nome,senha from user1 where nome = '". $login ."'");
  		$stmt->execute();
  		$r = $stmt->fetch(PDO::FETCH_NUM);
  		if ($r[1]!=$senha) {
  			throw new PDOException("Error Processing Request", 1);
  			return $erro=1;
  		} else {
        $_SESSION['logado']=$r[0];
      }
  	} catch (PDOException $e) {
  		echo "Deu um erro aí, Vê com o Leo:" . $e->getMessage();
  	} finally {
  		$conn = null;
  	}
  }
}
