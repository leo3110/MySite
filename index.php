<?php
session_start();
include 'script/function.php';
include 'GUI/header.php';
include 'GUI/leftMenu.php';

if ($_SESSION['op']='clean') {
  clean();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include_once 'Object/user.php';
  $u = new User();
  $u->checkUser();

}
elseif (!isset($_SESSION['op'])||!isset($_GET['tela'])) {
  $_SESSION['op'] = 'home';
  include "GUI/home.php";
}
else {
  echo "ERRO";
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
