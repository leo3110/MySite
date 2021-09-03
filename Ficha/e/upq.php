<?php
require "../classe/personagem.php";
require "../db/banco.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pers = new Personagem();
  $pers->setNome($_POST["nome_editpers"]);
  $pers->setRaca($_POST["raca_editpers"]);
  $pers->setNivel($_POST["nivel_editpers"]);
  $pers->setVigor($_POST["vigor_editpers"]);
  $pers->setForca($_POST["forca_editpers"]);
  $pers->setDestr($_POST["destr_editpers"]);
  $pers->setAgili($_POST["agili_editpers"]);
  $pers->setResis($_POST["resis_editpers"]);
  $pers->setIntel($_POST["intel_editpers"]);
  $pers->setConhe($_POST["conhe_editpers"]);
  $pers->setInven($_POST["inven_editpers"]);
  editapers($pers);
}
?>
