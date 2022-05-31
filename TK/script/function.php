<?php
function TKSearch(){
	$bankR = fopen("db/count.json","r") or die("erro ao abrir o banco");
	$json = fread($bankR,filesize("db/count.json"));
	fclose($bankR);
	$json = json_decode($json);
	foreach ($json as $key => $value) {
    echo "$('#$key').text('$value');";
	}
}
