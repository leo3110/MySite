<?php
function TKBusca(){
	$bancoR = fopen("db/contagem.json","r") or die("erro ao abrir o banco");
	$json = fread($bancoR,filesize("db/contagem.json"));
	fclose($bancoR);
	$json = json_decode($json);
	foreach ($json as $key => $value) {
    echo "$('#$key').text('$value');";
	}
}
