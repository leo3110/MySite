<?php
function login2(){
	if (isset($_GET['btn'])&&$_GET["btn"] == "logar") {
		$usuario = new Usuario();
		$usuario->setNome($_POST["login_usuario"]);
		$usuario->setSenha($_POST["senha_usuario"]);
		login($usuario);
		$erro = 0;
		$_SESSION['op']='logado';
	}
}

//banco velho
class RI extends RecursiveIteratorIterator {
	function __construct($it) {
		parent::__construct($it, self::LEAVES_ONLY);
	}
	function current() {
		return parent::current();
	}
}
class RI2 extends RecursiveIteratorIterator {//lista hab
	function __construct($it) {
		parent::__construct($it, self::LEAVES_ONLY);
	}
	function current() {
		return parent::current();
	}
	function beginChildren() {
		echo "<tr>";
	}
	function endChildren() {
		echo "</tr>" . "\n";
	}
}
function cadastraPers($pers){
	$server = "localhost";
	$user = "site";
	$pass = "Q2dCoJKZIajxQbUT";
	try {
		$conn = new PDO("mysql:host=$server;dbname=rpg",$user,$pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "insert into personagem (nome,nivel,raca,vigor,forca,destr,agili,resis,intel,conhe,inven)
		Values ('". $pers->getNome() ."',
		". $pers->getNivel() .",
		'". $pers->getRaca() ."',
		". $pers->getVigor() .",
		". $pers->getForca() .",
		". $pers->getDestr() .",
		". $pers->getAgili() .",
		". $pers->getResis() .",
		". $pers->getIntel() .",
		". $pers->getConhe() .",
		'". $pers->getInven() ."');";
		$conn->exec($sql);
	} catch (PDOException $e) {
		echo "Problema ao cadastrar Personagem: ".$e->getMessage();
	} finally {
		$conn = null;
	}
}
function login($usuario){
	$server = "localhost";
	$user = "site";
	$pass = "Q2dCoJKZIajxQbUT";
	try {
		$login = $_POST["login_usuario"];
		$senha = $_POST["senha_usuario"];
		$conn = new PDO("mysql:host=$server;dbname=rpg",$user,$pass);
		$conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("Select nome,senha from usuario where nome = '". $login ."'");
		$stmt->execute();
		$r = $stmt->fetch(PDO::FETCH_NUM);
		if ($r[1]!=$senha) {
			throw new PDOException("Error Processing Request", 1);
			return $erro=1;
		}
	} catch (PDOException $e) {
		echo "Deu um erro aí, Vê com o Leo:" . $e->getMessage();
	} finally {
		$conn = null;
	}
}
function selectPers(){
	$server = "localhost";
	$user = "site";
	$pass = "Q2dCoJKZIajxQbUT";
	try {
		$conn = new PDO("mysql:host=$server;dbname=rpg", $user, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("select nome from personagem");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new RI(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
			echo "<option value=".$v.">".$v."</option>";
		}
	} catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
}
function carregaPers(){
	$server = "localhost";
	$user = "site";
	$pass = "Q2dCoJKZIajxQbUT";
	try {
		$conn = new PDO("mysql:host=$server;dbname=rpg", $user, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("select * from personagem where nome = '".$_SESSION["select"]."'");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new RI(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
			echo "<span style='font-size:1px;color:#000000' id=T".$k.">".$v."</span>";
		}
	} catch (PDOException $e) {
		echo "Problema ao carregar o personagem: " . $e->getMessage();
	} finally {
		$conn = null;
	}
}
function carregaHab(){
	$server = "localhost";
	$user = "site";
	$pass = "Q2dCoJKZIajxQbUT";
	try {
		$conn = new PDO("mysql:host=$server;dbname=rpg", $user, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("select habilidades.nome_hab,habilidades.desc_hab,habilidades.atrib_hab from habilidades,pers_hab where pers_hab.fk_pers = '".$_SESSION["select"]."' and habilidades.id = pers_hab.fk_hab");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_NUM);
		foreach(new RI2(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
			echo "<td id=T".$k.">".$v."</td>";
		}
	} catch (PDOException $e) {
		echo "Erro ao consultar habilidades: ". $e->getMessage();
	} finally {
		$conn = null;
	}
}
function editaPers($pers){
	$server = "localhost";
	$user = "site";
	$pass = "Q2dCoJKZIajxQbUT";
	try {
		$conn = new PDO("mysql:host=$server;dbname=rpg", $user, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "update personagem set raca = '".$pers->getRaca()."',
		nivel=  ".$pers->getNivel().",
		vigor=  ".$pers->getVigor().",
		forca=  ".$pers->getForca().",
		destr=  ".$pers->getDestr().",
		agili=  ".$pers->getAgili().",
		resis=  ".$pers->getResis().",
		intel=  ".$pers->getIntel().",
		conhe=  ".$pers->getConhe().",
		inven= '".$pers->getInven()."' where nome = '".$_SESSION["select"]."'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	} catch (PDOException $e) {
		echo "Erro ao Editar Personagem: ". $e->getMessage();
	} finally {
		$conn = null;
	}
}
