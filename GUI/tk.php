<?php
    include 'script/api.php';
?>
<main>
    <div class="TK BA FullHeight Flex JCSA Centro" before='Brawlhalla TeamKill' after='E nós jogamos como parceiros...'>
        <div class="Player Flex Col JCSB">
            <img src="img/jaeyun.png">
            <h6 class="Name">Esse sou eu (a maioria das vezes)</h6>
            <h6 class="">E ja matei o Karu <?php echo printTKPlayer($statLeo); ?> vezes</h6>
        </div>
        <div class="Player Flex Col JCSB ">
            <img src="img/lin fei.png" style="transform: scaleX(-1);">
            <h6 class="Name">E esse (geralmente) é o Karu</h6>
            <h6 class="">E ja me matou <?php echo printTKPlayer($statKaru); ?> vezes</h6>
        </div>
    </div>
    <div class="Info FullWidth Flex Wrap CentroX">
        <h1 class="ShadowEffect">Um pouco sobre essa página...</h1>
        <h6 class="BodyText">
            Essa página nasceu como uma brincadeira entre eu e um amigo meu, o Karu. Brawlhalla é um jogo de luta online, e nós dois costumamos
            jogar em duplas. O problema é: o modo ranqueado tem fogo amigo...
            Infelizmente o TK é inevitável, em algum momento a gente acaba acertando o coleguinha com um ataque mal espaçado, ou entra no alcance do
            ataque do outro sem querer, ou até mesmo leva uma bola de espinhos de 10kg na nuca. Acontece. ¯\_(ツ)_/¯
            Enfim, esse sistema já me deu muito trabalho, desde ter que abrir ele e cadastrar os "TKs" manualmente, até mesmo o script bugar e não
            atualizar. Decidi então usar a API dos desenvolvedores para contar os números sozinhos, e descobri muita coisa nova! Aprendi JSON, Ajax PHP,
            JQuery e (óbviamente) manipular uma API. Devo ter esquecido alguma coisa, mas o mais importante é que agora eu não tenho mais que contar
            os "TKs" no meio da partida e posso esfregar na cara do Karu que ele não sabe diferenciar um aliado de um inimigo.
        </h6>
    </div>
	<div class="Flex Wrap">
    	<?php echo printLeo($statLeo); ?>
	</div>
</main>
