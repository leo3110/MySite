<main>
    <div class="OutQuadro Flex Col FullWidth FullHeight">
        <div class="Quadro Flex JCSA">
            <div class="Flex Col">
                <div><span class=""><i class=""></i>  Vida: <span id="vidaT_tela">20</span>/<span id="vidaM_tela">20</span></span></div>
                <div><span class=""><i class=""></i>  Mana: <span id="manaT_tela">20</span>/<span id="manaM_tela">20</span>  </span></div>
                <div><span class=""><i class=""></i>  Vigor: <span id="vigor_tela">  </span></div>
                <div><span class=""><i class=""></i>  Força: <span id="forca_tela">  </span></div>
                <div><span class=""><i class=""></i>  Destreza: <span id="destr_tela">  </span></div>
                <div><span class=""><i class=""></i>  Agilidade: <span id="agili_tela">  </span></div>
                <div><span class=""><i class=""></i>  Resistencia: <span id="resis_tela">  </span></div>
                <div><span class=""><i class=""></i>  Inteligência: <span id="intel_tela">  </span></div>
                <div><span class=""><i class=""></i>  Conhecimento: <span id="conhe_tela">  </span></div>
            </div>
            <div class="">
                <h1 class="text-center"><span id="nome_tela"></span> - <span id="raca_tela"></span> </h1>
                <div>Nivel: <span id="nivel_tela"></span></div>
                <table>

                </table>
            </div>
        </div>
        <div class="">
            <div class="">
                <button id="dado"  type="button" class="" onclick="D20()" onkeyup="mesaDeDados()">D20</button>
                <button id="dado"  type="button" class="" onclick="D10()" onkeyup="mesaDeDados()">D10</button>
                <button id="dado"  type="button" class="" onclick="D100()" onkeyup="mesaDeDados()">D100</button>
                <button id="dado"  type="button" class="" onclick="D6()" onkeyup="mesaDeDados()">D6</button>
                <button id="dado"  type="button" class="" onclick="Moeda()" onkeyup="mesaDeDados()">Cara ou coroa</button>
            </div>
            <div class="">
                <span id="resultado">"MESA"</span>
            </div>
        </div>
    </div>
</main>
