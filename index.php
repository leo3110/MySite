<?php
session_start();
$_SESSION['op']='home';
include 'script/function.php';
include 'GUI/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Login
  include 'Object/user.php';
  $u = new User();
  $u->checkUser();
  include 'GUI/home.php';
}
if (isset($_GET['op'])&&($_GET['op']=='clean'||$_GET['op']=='logout')) {
  clean();
  include 'GUI/ficha.php';
}
elseif (!isset($_SESSION['op'])) {
  include "GUI/home.php";
  $_SESSION['op']='home';
}
else {
  include 'GUI/Home.php';
}

include 'GUI/footer.php';
