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
function TKSearch(){
	$bankR = fopen("../db/count.json","r") or die("erro ao abrir o banco");
	$json = fread($bankR,filesize("../db/count.json"));
	fclose($bankR);
	$json = json_decode($json);
	foreach ($json as $key => $value) {
		echo "$('#$key').text('$value');";
	}
}
