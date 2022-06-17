<?php
$_SESSION['op']='table';
include '../../Class/Character.php';
include '../../GUI/header.php';
include '../../GUI/'.$_SESSION['op'].'.php';
