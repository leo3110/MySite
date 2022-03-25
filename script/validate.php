<?php
function clean($c){
    $c = trim($c);
    $c = stripslashes($c);
    $c = htmlspecialchars($c);
    return $c;
}
function checkForm() {
    $a = clean($_POST['Id']);
    $b = clean($_POST['Pass']);
    $bancoR = fopen('db/banco.json','r') or die ('erro ao logar');
    $json = fread($bancoR,filesize('db/banco.json'));
    $objson = json_decode($json);
    foreach ($objson as $key) {
        echo $key->Id;
    }
}
