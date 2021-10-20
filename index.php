<?php
session_start();
include_once 'script/start.php';
include 'script/function.php';
include 'GUI/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include_once 'Object/user.php';
  $u = new User();
  $u->checkUser();
  include 'GUI/leftMenu.php';
  include 'GUI/home.php';
}
elseif ($_SESSION['op'] == 'start') {
  include 'GUI/leftMenu.php';
  include "GUI/home.php";
  $_SESSION['op']='home';
}
elseif (checkTela($_GET['tela'])) {
  $_SESSION['op']=$_GET['tela'];
  include 'GUI/leftMenu.php';
  include 'GUI/'.$_GET["tela"].'.php';
  echo "wtf";
}

else echo "ERRO";
if (isset($_GET['tela'])&&$_GET['tela']=='clean') {
  clean();
}
include_once 'GUI/footer.php';
// [
// {"type":"header","version":"5.0.2","comment":"Export to JSON plugin for PHPMyAdmin"},
// {"type":"database","name":"mydata"},
// {"type":"table","name":"user1","database":"mydata","data":
// [
// {"id":"1","nome":"asd","senha":"asd"}
// ]
// }
// ]
