<?php
session_start();
include 'script/function.php';
include 'GUI/header.php';
include 'GUI/leftMenu.php';
//
// if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Login
//   include 'Object/user.php';
//   $u = new User();
//   $u->checkUser();
//   include 'GUI/home.php';
// }
// if (isset($_GET['op'])&&($_GET['op']=='clean'||$_GET['op']=='logout')) {
//   clean();
//   include 'GUI/ficha.php';
// }
// elseif (isset($_GET['tela'])&&checkTela($_GET['tela'])) {
//   $_SESSION['op']=$_GET['tela'];
//   include 'GUI/'.$_GET['tela'].'.php';
// }
// elseif (!isset($_SESSION['op'])) {
//   include "GUI/home.php";
//   $_SESSION['op']='home';
// }
// else {
  include "GUI/home.php";
// }
include 'GUI/footer.php';
