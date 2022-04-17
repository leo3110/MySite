<?php
if (isset($_GET['char'])) {
    $_SESSION['personagem'] = $_GET['char'];
    $class = new Personagem();
}
 ?>
<main>
    <div class="OutQuadro FullWidth FullHeight Flex Col JCSA">
        <div class="Quadro Flex JCSB">
            <div class="Atrib Flex">
                <div class="Left Flex Col">
                    <!-- <div><i class=""></i>Vida: <span id="vidaT">20</span></div>
                    <div><i class=""></i>Mana: <span id="manaT">20</span></div> -->
                    <div><i class=""></i>Vigor: <span id="vigor"></span></div>
                    <div><i class=""></i>Força: <span id="forca"></span></div>
                    <div><i class=""></i>Destreza: <span id="destr"></span></div>
                    <div><i class=""></i>Agilidade: <span id="agili"></span></div>
                    <div><i class=""></i>Resistencia: <span id="resis"></span></div>
                    <div><i class=""></i>Inteligência: <span id="intel"></span></div>
                    <div><i class=""></i>Conhecimento: <span id="conhe"></span></div>
                </div>
                <div class="Right Flex Col"><?php $class->printAtrib(); ?></div>
            </div>
            <div class="Info Flex Col col-9">
                <div class="Top Flex">
                    <div class="LeftInfo Flex col-3">
                        <?php echo $class->printName(); ?>
                    </div>
                    <div class="RightInfo Flex Col JCSA col-8">
	                    <?php echo $class->printArmas(); ?>
                    </div>
                </div>
                <div class="Bottom">
                </div>
            </div>
        </div>
        <div class="Quadro Flex JCSB">
            <div class="Dados">
                <button type="button" class="Dado" onclick="D20()" onkeyup="mesaDeDados()"> <i class="fa-solid fa-dice-d20">D20</i></button>
                <button type="button" class="Dado" onclick="D10()" onkeyup="mesaDeDados()"> <i class="fa-solid fa-dice-d6">D10</i></button>
                <button type="button" class="Dado" onclick="D100()" onkeyup="mesaDeDados()"> <i class="fa-solid fa-dice-d6">D100</i></button>
                <button type="button" class="Dado" onclick="D6()" onkeyup="mesaDeDados()"> <i class="fa-solid fa-dice-d6">D6</i></button>
                <button type="button" class="Dado" onclick="Moeda()" onkeyup="mesaDeDados()"> <i class="fa-solid fa-dice-d6">Cara ou Coroa</i></button>
            </div>
            <div class="">
                <span id="resultado">"MESA"</span>
            </div>
        </div>
    </div>
</main>
