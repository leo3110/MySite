<?php
session_start();
include 'script/function.php';
include 'GUI/header.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Login
  include 'Object/user.php';
  $u = new User();
  $u->checkUser();
  include 'GUI/home.php';
}
//TK
if (isset($_GET['tela']) && $_GET['tela'] == "tk" && isset($_GET['vacilo'])) {
	$a = $_GET['vacilo'];
	$b = 1;
	TKManda($a, $b);
	unset($_GET['vacilo']);
}
if (isset($_GET['tela']) && $_GET['tela'] == "tk" && isset($_GET['equivoco'])) {
	$a = $_GET['equivoco'];
	$b = -1;
	TKManda($a, $b);
	unset($_GET['equivoco']);
}
//TK
if (isset($_GET['op'])&&($_GET['op']=='clean'||$_GET['op']=='logout')) {
  clean();
  include 'GUI/ficha.php';
}
elseif (isset($_GET['tela'])&&checkTela($_GET['tela'])) {
  $_SESSION['op']=$_GET['tela'];
  include 'GUI/'.$_GET['tela'].'.php';
}
elseif (!isset($_SESSION['op'])) {
  include "GUI/home.php";
  $_SESSION['op']='home';
}
else {
  echo "erro";
}

include 'GUI/footer.php';
