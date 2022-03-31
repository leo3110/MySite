<?php
$_SESSION['op']='form';
include 'script/function.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../Script/validate.php';
    if (isset($_SESSION['Logado'])) {
        $_SESSION['op'] = 'select';
    }
}
if (isset($_SESSION['op'])) {
    include '../GUI/header.php';
    include 'GUI/'.$_SESSION['op'].'.php';
}
else {
    echo "erro";
}
include '../GUI/footer.php';
