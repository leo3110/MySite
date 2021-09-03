<?php
session_start();
if (!isset($_SESSION['op'])) {
  $_SESSION['op'] = 'start';
}
include 'GUI/header.html';
include 'GUI/leftMenu.html';
// if ($_SESSION['op'] == 'start') {
// }

include 'GUI/footer.html';
