<?php
session_start();
include_once 'script/function.php';
include_once 'GUI/header.html';
include_once 'GUI/leftMenu.html';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include_once 'Object/user.php';
  $u = new User();
  $u->checkUser();
}
elseif (!isset($_SESSION['op'])||!isset($_GET['tela'])) {
  $_SESSION['op'] = 'home';
  $_GET['tela'] = 'home';
}
elseif (checkTela($_GET['tela'])) {
  $_SESSION['op']=$_GET['tela'];
  include_once 'GUI/'.$_GET["tela"].'.php';
}
else {
  echo "ERRO";
}

include_once 'GUI/footer.html';
// [
// {"type":"header","version":"5.0.2","comment":"Export to JSON plugin for PHPMyAdmin"},
// {"type":"database","name":"mydata"},
// {"type":"table","name":"user1","database":"mydata","data":
// [
// {"id":"1","nome":"asd","senha":"asd"}
// ]
// }
// ]
