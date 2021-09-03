<?php
  require "db/banco.php";
  require "classe/personagem.php";
  require "classe/usuario.php";
?>
  <body style="font-family:BinkMacSystemFont;color:#ffffff;background-color:#000000;font-size:21px" class="content-center">
    <div class="row p-1 m-1 rounded border border-primary" style="background-color:#303030">
      <div class="col-3 rounded mr-1 border border-info" style="background-color:#060606">
        <div><span class="text-danger"><i class="fas fa-heartbeat"></i>  Vida: <span id="vidaT_tela">20</span>/<span id="vidaM_tela">20</span></span></div>
        <div><span class="text-info"><i class="fas fa-magic"></i>  Mana: <span id="manaT_tela">20</span>/<span id="manaM_tela">20</span>  </span></div>
        <div><span class="text-danger"><i class="fas fa-heart"></i>  Vigor: <span id="vigor_tela">  </span></div>
        <div><span class=""><i class="fas fa-fist-raised"></i>  Força: <span id="forca_tela">  </span></div>
        <div><span class=""><i class="fas fa-hand-point-right"></i>  Destreza: <span id="destr_tela">  </span></div>
        <div><span class=""><i class="fas fa-wind"></i>  Agilidade: <span id="agili_tela">  </span></div>
        <div><span class=""><i class="fas fa-shield-alt"></i>  Resistencia: <span id="resis_tela">  </span></div>
        <div><span class="text-info"><i class="fas fa-brain"></i>  Inteligência: <span id="intel_tela">  </span></div>
        <div><span class=""><i class="fas fa-scroll"></i>  Conhecimento: <span id="conhe_tela">  </span></div>
      </div>
      <div class="col rounded ml-1 border border-info" style="background-color:#060606">
        <h1 class="text-center"><span id="nome_tela"></span> - <span id="raca_tela"></span> </h1>
        <div>Nivel: <span id="nivel_tela"></span></div>
        <table>

        </table>
      </div>
    </div>
    <div class="row p-1 mx-1 my-2 border border-primary rounded" style="background-color:#303030">
      <div class="col-3 mr-1 border border-info rounded" style="background-color:#060606">
        <button id="dado"  type="button" class="m-1 rounded bg-dark text-light" onclick="D20()" onkeyup="mesaDeDados()">D20</button>
        <button id="dado"  type="button" class="m-1 rounded bg-dark text-light" onclick="D10()" onkeyup="mesaDeDados()">D10</button>
        <button id="dado"  type="button" class="m-1 rounded bg-dark text-light" onclick="D100()" onkeyup="mesaDeDados()">D100</button>
        <button id="dado"  type="button" class="m-1 rounded bg-dark text-light" onclick="D6()" onkeyup="mesaDeDados()">D6</button>
        <button id="dado"  type="button" class="m-1 rounded bg-dark text-light" onclick="Moeda()" onkeyup="mesaDeDados()">Cara ou coroa</button>
      </div>
      <div class="col border border-info rounded text-center display-1 ml-1" style="background-color:#060606">
        <span id="resultado">"MESA"</span>
      </div>
    </div>
  </body>
</html>
