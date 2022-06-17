<?php
$_SESSION['op']='form';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../Class/User.php';
    $u = new User;
    if (isset($_SESSION['Logado'])) {
        $_SESSION['op'] = 'select';
    }
}
include '../GUI/header.php';
if (isset($_SESSION['op'])) {
    include '../GUI/'.$_SESSION['op'].'.php';
}
else {
    echo "erro";
}
