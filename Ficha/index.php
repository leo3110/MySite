<?php
$_SESSION['op']='form';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../classe/usuario.php';
    $u = new Usuario;
    if (isset($_SESSION['Logado'])) {
        $_SESSION['op'] = 'select';
    }
}
if (isset($_SESSION['op'])) {
    include '../GUI/header.php';
    include '../script/function.php';
    include '../GUI/'.$_SESSION['op'].'.php';
}
else {
    echo "erro";
}
include '../GUI/footer.php';
