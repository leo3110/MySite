<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../Script/validate.php';
}
if (isset($_SESSION['Logado'])) {
    include 'GUI/select.php';
}else {
    include 'GUI/form.php';
}
