<?php
  require "../classe/personagem.php";
  require "../db/banco.php";
  carregaPers();
?>
<!DOCTYPE html>
<html lang='pt-br' dir='ltr'>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset='utf-8'>
    <title>A cria se modifica</title>
    <script type="text/javascript">
      $(document).ready(function(){
        document.getElementById("nome_editpers").value = document.getElementById("Tnome").innerHTML;
        document.getElementById("raca_editpers").value = document.getElementById("Traca").innerHTML;
        document.getElementById("nivel_editpers").value = document.getElementById("Tnivel").innerHTML;
        document.getElementById("vigor_editpers").value = document.getElementById("Tvigor").innerHTML;
        document.getElementById("forca_editpers").value = document.getElementById("Tforca").innerHTML;
        document.getElementById("destr_editpers").value = document.getElementById("Tdestr").innerHTML;
        document.getElementById("agili_editpers").value = document.getElementById("Tagili").innerHTML;
        document.getElementById("resis_editpers").value = document.getElementById("Tresis").innerHTML;
        document.getElementById("intel_editpers").value = document.getElementById("Tintel").innerHTML;
        document.getElementById("conhe_editpers").value = document.getElementById("Tconhe").innerHTML;
        document.getElementById("inven_editpers").value = document.getElementById("Tinven").innerHTML;
      });
    </script>
  </head>
  <body style="color:#ffffff;background-color:#2f2f2f" class="text-light content-center text-center">
    <div class="p-5"> </div>
    <div id="quadro" class="mx-3 rounded" style="background-color:#0f0f0f">
      <h1 class="mb-3">Bom saber que está mudando.</h1>
      <form class="" action="../tela.php" method="post">
        <h4>
          <div class="row">
            <div class="col-12 my-3">
              <span class="">Nome:</span>
              <input class="form-control border border-primary rounded w-75 mx-auto bg-dark text-light" type="text" name="nome_editpers" id="nome_editpers" value="" readonly>
            </div>
            <div class="col my">
              <span class="">Raca:</span>
              <input class="form-control border border-primary rounded w-75 mx-auto bg-dark text-light" type="text" name="raca_editpers" id="raca_editpers" value="">
            </div>
            <div class="col my">
              <span class="">Nivel:</span>
              <input class="form-control border border-primary rounded w-75 mx-auto bg-dark text-light" type="number" name="nivel_editpers" id="nivel_editpers" value="">
            </div>
          </div>
          <div class="row mx-2">
            <div class="col-3">
              <span>Vigor</span>
              <input class="form-control border border-primary rounded mx-auto bg-dark text-light" type="number" name="vigor_editpers" id="vigor_editpers" value="">
            </div>
            <div class="col-3">
              <span>Força</span>
              <input class="form-control border border-primary rounded mx-auto bg-dark text-light" type="number" name="forca_editpers" id="forca_editpers" value="">
            </div>
            <div class="col-3">
              <span>Destreza</span>
              <input class="form-control border border-primary rounded mx-auto bg-dark text-light" type="number" name="destr_editpers" id="destr_editpers" value="">
            </div>
            <div class="col-3">
              <span>Agilidade</span>
              <input class="form-control border border-primary rounded mx-auto bg-dark text-light" type="number" name="agili_editpers" id="agili_editpers" value="">
            </div>
            <div class="col-3">
              <span>Resistencia</span>
              <input class="form-control border border-primary rounded mx-auto bg-dark text-light" type="number" name="resis_editpers" id="resis_editpers" value="">
            </div>
            <div class="col-3">
              <span>Inteligência</span>
              <input class="form-control border border-primary rounded mx-auto bg-dark text-light" type="number" name="intel_editpers" id="intel_editpers" value="">
            </div>
            <div class="col-3">
              <span>Conhecimento</span>
              <input class="form-control border border-primary rounded mx-auto bg-dark text-light" type="number" name="conhe_editpers" id="conhe_editpers" value="">
            </div>
            <div class="col-12">
              <span>Inventário</span>
              <textarea class="form-control border border-primary bg-dark text-light" name="inven_editpers" id="inven_editpers" value=""></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button class="form-control border border-primary w-25 mx-auto bg-dark text-light my-3" type="submit" name="button">Criar</button>
            </div>
          </div>
        </h4>
      </form>
    </div>
    <div class="p-5"> </div>
  </body>
</html>
