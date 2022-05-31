<main>
    <div class="OutLogin Flex FullHeight FullWidth CentroX">
        <div class="Login Flex FullHeight FullWidth CentroY">
            <form class="Form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <?php if (isset($_SESSION['Login'])&&$_SESSION['Login']=='erro') echo "<h6>ERRO AO LOGAR! TENTE NOVAMENTE</h6> "; ?>
                <div class='Input'><label for="Id"><i class="fa-solid fa-user"> :</i></label> <input type="text" name="Id" id="Id"></div>
                <div class='Input'><label for="Pass"><i class="fa-solid fa-key">:</i></label> <input type="password" name="Pass" id="Pass"></div>
                <div class="OutButton Flex">
                    <button type="submit" name="Entrar" class="Button" id="Entrar">Entrar-></button>
                </div>
                <div class="OutButton Flex">
                    <a href="User">
                        <button type="button" name="Criar" class="Button" id="Criar">Sou novo-></button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>
