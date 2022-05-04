<?php
$_SESSION['op']='form';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../classe/usuario.php';
    $u = new Usuario;
    if (isset($_SESSION['Logado'])) {
        $_SESSION['op'] = 'select';
    }
}
include '../GUI/header.php';
if (isset($_GET['q'])&&$_GET['q']='novo') {
    include '../GUI/new.php';
}
elseif (isset($_SESSION['op'])) {
    // validate vem aqui
    include '../GUI/'.$_SESSION['op'].'.php';
}
else {
    echo "erro";
}
