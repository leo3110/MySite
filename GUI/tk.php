<?php
    include 'script/api.php';
?>
<main>
    <div class="TK ShadowEffect BA FullHeight Flex JCSA Centro" before='Brawlhalla TeamKill' after='E nós jogamos como parceiros...'>
        <div class="Player Flex Col JCSB">
            <img src="img/jaeyun.png">
            <h6 class="Name">Esse sou eu (a maioria das vezes)</h6>
            <h6 class="">E ja matei o Karu <span id="leo_tk">0</span> vezes</h6>
        </div>
        <div class="Player Flex Col JCSB ">
            <img src="img/lin fei.png" style="transform: scaleX(-1);">
            <h6 class="Name">E esse (geralmente) é o Karu</h6>
            <h6 class="">E ja me matou <?php APIBrawl::printTKKaru(); ?> vezes</h6>
        </div>
    </div>
    <div class="Test FullWidth FullHeight Flex Wrap"> </div>
</main>
