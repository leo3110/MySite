<main>
    <div class="OutQuadro FullWidth FullHeight Flex Col JCSA">
        <div class="Quadro Flex JCSB">
            <div class="Atrib Flex Col">
                <div><i class=""></i>Vida: <span id="vidaT">20</span></div>
                <div><i class=""></i>Mana: <span id="manaT">20</span></div>
                <div><i class=""></i>Vigor: <span id="vigor"></span></div>
                <div><i class=""></i>Força: <span id="forca"></span></div>
                <div><i class=""></i>Destreza: <span id="destr"></span></div>
                <div><i class=""></i>Agilidade: <span id="agili"></span></div>
                <div><i class=""></i>Resistencia: <span id="resis"></span></div>
                <div><i class=""></i>Inteligência: <span id="intel"></span></div>
                <div><i class=""></i>Conhecimento: <span id="conhe"></span></div>
            </div>
            <div class="">
                <h1 class="text-center"><?php echo nomeChar(); ?></h1>
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
