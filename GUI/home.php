<style>
@import url('https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Roboto+Slab:wght@100&display=swap');
</style>
<main>
    <a href="#Sistems">
        <div class="OutArrow Flex Centro">
            <div class="Arrow"></div>
        </div>
    </a>
    <div class="Welcome Flex CentroY">
        <?php if ($_SESSION['lang']=='pt-br'): ?>
            <div class="Creator Flex Col JCSB ShadowEffect" before="Criado por">
                <h3>leonardo</h3>
                <h3>nunes</h3>
                <h3>souza</h3>
            </div>
            <div class="Name" before="Bem vindo ao">
                <h1>linus</h1>
            </div>
        <?php else: ?>
            <div class="Creator Flex Col JCSB ShadowEffect" before="Created by">
                <h3>leonardo</h3>
                <h3>nunes</h3>
                <h3>souza</h3>
            </div>
            <div class="Name" before="Welcome to">
                <h1>linus</h1>
            </div>
        <?php endif; ?>
    </div>
    <div class="Sistems Flex Col MaxWidth JCSB Wrap" id="Sistems">
        <a class="Frame Flex Centro" href="/Pallete">
            <?php if ($_SESSION['lang'] == 'pt-br'): ?>
                <span>Paleta de Cor</span>
            <?php else: ?>
                <span>Color Pallete</span>
            <?php endif; ?>
        </a>
        <a class="Frame Flex Centro" href="/TK">
            <span>TK</span>
        </a>
        <a class="Frame Flex Centro" href="/Sheet">
            <span>RPG</span>
        </a>
        <a class="Frame Flex Centro" href="#">
            <span>Sistema 4</span>
        </a>
    </div>
</main>
