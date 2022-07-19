<main>
    <a href="#OutSystem">
        <div class="OutArrow Flex Centro">
            <div class="Arrow"></div>
        </div>
    </a>
    <div class="Welcome ShadowEffect CoolFont Flex CentroY">
        <?php if ($_SESSION['lang']=='pt-br'): ?>
            <div class="Creator BA Flex Col JCSB ShadowEffect" before="Criado por">
                <h3>leonardo</h3>
                <h3>nunes</h3>
                <h3>souza</h3>
            </div>
            <div class="Name BA" before="Bem vindo ao">
                <h1>linus</h1>
            </div>
        <?php else: ?>
            <div class="Creator BA Flex Col JCSB ShadowEffect" before="Created by">
                <h3>leonardo</h3>
                <h3>nunes</h3>
                <h3>souza</h3>
            </div>
            <div class="Name BA" before="Welcome to">
                <h1>linus</h1>
            </div>
        <?php endif; ?>
    </div>
	<?php include 'GUI/Division.php'; ?>
    <div class="OutSystem Flex Col MaxWidth JCSB Wrap" id="OutSystem">
        <a class="System Flex Centro" href="/Pallete">
            <?php if ($_SESSION['lang'] == 'pt-br'): ?>
                <span>Paleta de Cor</span>
            <?php else: ?>
                <span>Color Pallete</span>
            <?php endif; ?>
        </a>
        <a class="System Flex Centro" href="/TK">
            <span>TK</span>
        </a>
        <a class="System Flex Centro" href="#">
            <?php if ($_SESSION['lang'] == 'pt-br'): ?>
                <span>Em Breve</span>
            <?php else: ?>
                <span>Coming Soon</span>
            <?php endif; ?>
        </a>
    </div>
</main>
