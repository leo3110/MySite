<?php
class TableRows extends RecursiveIteratorIterator {
	function __construct($it) {
		parent::__construct($it, self::LEAVES_ONLY);
	}

	function current() {
		return parent::current();
	}
	function beginChildren() {
    	echo "<script type='text/javascript'>
		$(document).ready(function(){";
  	}

  	function endChildren() {
    	echo "});
		</script>";
  	}
}

define('tela', ['login','home','ficha','tk']);
function checkEqual($a,$b){
	if (isset($a)&&$a==$b) {
		return true;
	}
}
function checkSet($a){
	if (isset($a)) {
		return $a;
	}
}
function checkTela($a){
	foreach (tela as $key) {
		if ($key == $a) {
			return $a;
		}
		else {
			return "home";
		}
	}
}
function clean(){
	unset($_SESSION);
}
function TKBusca(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tk";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT leo_tk,karu_tk FROM contagem");
		$stmt->execute();
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
			echo "document.getElementById('$k').innerHTML = '$v';";
		}
	} catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
}
function TKManda(){
	$a = $_GET['vacilo'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tk";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "update contagem set $a=$a + 1 where id_tk = 1";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	finally{
		$conn = null;
		TKBusca();
	}
}
