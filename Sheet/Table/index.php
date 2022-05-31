<?php
$_SESSION['op']='mesa';
include '../../classe/personagem.php';
include '../../GUI/header.php';
include '../../GUI/'.$_SESSION['op'].'.php';
