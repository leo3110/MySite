<?php
function LeftMenu(){
  foreach (tela as $key) {
    echo "<a href='?tela=$key'><li class=''>".ucfirst($key)."</li></a>";
  }
}
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
function clean(){
	unset($_SESSION);
}

function TKBusca(){
	$bancoR = fopen("../db/contagem.json","r") or die("erro ao abrir o banco");
	$json = fread($bancoR,filesize("../db/contagem.json"));
	fclose($bancoR);
	$json = json_decode($json);
	foreach ($json as $key => $value) {
		echo "$('#$key').text('$value');";
	}
}
