<?php
  require "../classe/personagem.php";
  require "../db/banco.php";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pers = new Personagem();
    $pers->setNome($_POST["nome_cadpers"]);
    $pers->setRaca($_POST["raca_cadpers"]);
    $pers->setNivel($_POST["nivel_cadpers"]);
    $pers->setVigor($_POST["vigor_cadpers"]);
    $pers->setForca($_POST["forca_cadpers"]);
    $pers->setDestr($_POST["destr_cadpers"]);
    $pers->setAgili($_POST["agili_cadpers"]);
    $pers->setResis($_POST["resis_cadpers"]);
    $pers->setIntel($_POST["intel_cadpers"]);
    $pers->setConhe($_POST["conhe_cadpers"]);
    $pers->setInven($_POST["inven_cadpers"]);
    cadastraPers($pers);
  }
?>
<!DOCTYPE html>
<html lang='pt-br' dir='ltr'>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset='utf-8'>
    <title>Hora de forjar uma nova ferramenta</title>
  </head>
  <body style="color:#ffffff;background-color:#2f2f2f" class="text-light content-center text-center">
    <div class="p-5"> </div>
    <div id="quadro" class="mx-3 rounded" style="background-color:#0f0f0f">
      <h1 class="mb-3">Novo personagem</h1>
      <form class="" action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="post">
        <h4>
          <div class="row">
            <div class="col-12 my-3">
              <span class="">Nome:</span>
              <input class="form-control rounded w-75 mx-auto bg-secondary text-light" type="text" name="nome_cadpers" id="nome_cadpers" value="">
            </div>
            <div class="col my">
              <span class="">Raca:</span>
              <input class="form-control rounded w-75 mx-auto bg-secondary text-light" type="text" name="raca_cadpers" id="raca_cadpers" value="">
            </div>
            <div class="col my">
              <span class="">Nivel:</span>
              <input class="form-control rounded w-75 mx-auto bg-secondary text-light" type="number" name="nivel_cadpers" id="nivel_cadpers" value="">
            </div>
          </div>
          <div class="row mx-2">
            <div class="col-3">
              <span>Vigor</span>
              <input class="form-control rounded mx-auto bg-secondary text-light" type="number" name="vigor_cadpers" id="vigor_cadpers">
            </div>
            <div class="col-3">
              <span>Força</span>
              <input class="form-control rounded mx-auto bg-secondary text-light" type="number" name="forca_cadpers" id="vigor_cadpers">
            </div>
            <div class="col-3">
              <span>Destreza</span>
              <input class="form-control rounded mx-auto bg-secondary text-light" type="number" name="destr_cadpers" id="vigor_cadpers">
            </div>
            <div class="col-3">
              <span>Agilidade</span>
              <input class="form-control rounded mx-auto bg-secondary text-light" type="number" name="agili_cadpers" id="vigor_cadpers">
            </div>
            <div class="col-3">
              <span>Resistencia</span>
              <input class="form-control rounded mx-auto bg-secondary text-light" type="number" name="resis_cadpers" id="vigor_cadpers">
            </div>
            <div class="col-3">
              <span>Inteligência</span>
              <input class="form-control rounded mx-auto bg-secondary text-light" type="number" name="intel_cadpers" id="vigor_cadpers">
            </div>
            <div class="col-3">
              <span>Conhecimento</span>
              <input class="form-control rounded mx-auto bg-secondary text-light" type="number" name="conhe_cadpers" id="vigor_cadpers">
            </div>
            <div class="col-12">
              <span>Inventário</span>
              <textarea class="form-control bg-secondary text-light" name="inven_cadpers" id="inven_cadpers"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button class="form-control w-25 mx-auto bg-dark text-light my-3" type="submit" name="button">Criar</button>
            </div>
          </div>
        </h4>
      </form>
    </div>
    <div class="p-5"> </div>
  </body>
</html>
