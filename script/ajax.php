<?php
$a = $_REQUEST['a'];
if ($_REQUEST['b']=='Incrementa') $b=1;
if ($_REQUEST['b']=='Decrementa') $b=-1;
$bancoR = fopen("../TK/db/contagem.json","r") or die("erro ao abrir o banco");
$json = fread($bancoR,filesize("../TK/db/contagem.json"));
$objson = json_decode($json);
$objson->$a = $objson->$a+$b;
echo $objson->$a;
$json = json_encode($objson);
fclose($bancoR);
$bancoE = fopen("../TK/db/contagem.json","w") or die("erro ao abrir o banco");
fwrite($bancoE,$json);
fclose($bancoE);
