<?php
session_start();
include 'script/function.php';
if (!isset($_SESSION['op'])) {
  $_SESSION['op'] = 'home';
  $_GET['tela'] ='home';
}
include 'GUI/header.html';
include 'GUI/leftMenu.html';
if (checkSet($_GET['tela'])) {
  $_SESSION['op']=$_GET['tela'];
  include 'GUI/'.$_GET['tela'].'.php';
}

include 'GUI/footer.html';
