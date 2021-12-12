<?php
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
		return "home";
	}
}
function clean(){
	unset($_SESSION);
}
function TKBusca(){
	$bancoR = fopen("TK/db/contagem.json","r") or die("erro ao abrir o banco");
	$json = fread($bancoR,filesize("TK/db/contagem.json"));
	fclose($bancoR);
	$json = json_decode($json);
	foreach ($json as $key => $value) {
		echo "document.getElementById('$key').innerHTML = '$value';	";
	}
}
function TKManda(){
	$a = $_GET['vacilo'];
	$bancoR = fopen("TK/db/contagem.json","r") or die("erro ao abrir o banco");
	$json = fread($bancoR,filesize("TK/db/contagem.json"));
	$objson = json_decode($json);
	$objson->$a = $objson->$a+1;
	$json = json_encode($objson);
	fclose($bancoR);
	$bancoE = fopen("TK/db/contagem.json","w") or die("erro ao abrir o banco");
	fwrite($bancoE,$json);
}
