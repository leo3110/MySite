<style>
@import url('https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Roboto+Slab:wght@100&display=swap');
</style>
<main>
    <a href="#Sistems">
        <div class="OutArrow Flex CentroX CentroY">
            <div class="Arrow"></div>
        </div>
    </a>
    <div class="Welcome Flex CentroY">
        <?php if ($_SESSION['lang']=='br'): ?>
            <div class="Creator Flex Col JCSB" bef="Criado por">
                <h3>leonardo</h3>
                <h3>nunes</h3>
                <h3>souza</h3>
            </div>
            <div class="Name" bef="Bem vindo ao">
                <h1>linus</h1>
            </div>
        <?php else: ?>
            <div class="Creator Flex Col JCSB" bef="Created by">
                <h3>leonardo</h3>
                <h3>nunes</h3>
                <h3>souza</h3>
            </div>
            <div class="Name" bef="Welcome to">
                <h1>linus</h1>
            </div>
        <?php endif; ?>
    </div>
    <div class="Sistems Flex MaxWidth Centro JCSB Wrap" id="Sistems">
        <a class="Frame Flex Centro" href="/TK">
            <span>TK</span>
        </a>
        <a class="Frame Flex Centro" href="/Sheet">
            <span>Ficha</span>
        </a>
        <a class="Frame Flex Centro" href="/Pallete">
            <span>Paleta de Cor</span>
        </a>
        <a class="Frame Flex Centro" href="#">
            <span>Sistema 4</span>
        </a>
    </div>
</main>
